import telebot
import subprocess
import os

BOT_TOKEN = "6156455579:AAFRnKUdoVWeIoGJ-plGHpngsIEJzlQ43Nc"

bot = telebot.TeleBot(BOT_TOKEN)

@bot.message_handler(commands=['start', 'hello'])
def send_welcome(message):
    bot.reply_to(message, "Howdy, how are you doing?")




def extract_image(music_name):
    command = f"ffmpeg -i {music_name}.mp3 -an -vcodec copy cover.jpg"
    result = subprocess.run(command, shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE)

    
    return True

def delete_music(music_name):
    
    os.remove(f"{music_name}.mp3")
    
    return True


def delete_cover():
    
    os.remove("cover.jpg")
    
    return True


@bot.message_handler(content_types=['audio', 'voice'])
def handle_music(message):
    file_info = bot.get_file(message.audio.file_id)
    
    downloaded_file = bot.download_file(file_info.file_path)
    
    with open(f"{message.audio.file_id}.mp3", 'wb') as new_file:
        new_file.write(downloaded_file)
    
    result = extract_image(message.audio.file_id)    
    
    if result:
        with open("cover.jpg", 'rb') as photo:
            bot.send_photo(message.chat.id, photo, reply_to_message_id=message.message_id)
        
    else:
        bot.reply_to(message, "ERROR")    

    delete_cover()
    
    delete_music(message.audio.file_id)

bot.infinity_polling()
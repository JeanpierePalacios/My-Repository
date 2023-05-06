from click import command
from matplotlib.pyplot import phase_spectrum
from sklearn.ensemble import VotingClassifier
import pyttsx3 as voz
import speech_recognition as sr
import subprocess as sub
from datetime import datetime

#Configuracion de la voz
voice = voz.init()
voices = voice.getProperty('voices')
voice.setProperty('voice', voices[0].id) #Configuración de voz
voice.setProperty('rate',140) #Velocidad de la voz

name = 'lili'

def say(text):
    voice.say(text)
    voice.runAndWait()

while True:
    recognizer = sr.Recognizer()
    #Activación del micrófono
    with sr.Microphone() as source:
        print('Escuchando...')
        audio = recognizer.listen(source, phrase_time_limit = 3)

    try: #Si se entiende nuestra voz se entra a la lógica
        command = recognizer.recognize_google(audio, language='es-ES')
        print(f'Creo que dijiste "{command}"')

        command = command.lower()
        command = command.split(' ')

        if name in command:
            #Sitios web
            if 'abre' in command or 'abrir' in command:
                sites={
                    'google':'google.com',
                    'youtube':'youtube.com',
                    'instagram':'instagram.com',
                    'facebook':'facebook.com',
                    'github':'github.com',
                    'google académico':'scholar.google.es',
                    'whatsapp':'web.whatsapp.com'
                }
                for i in list(sites.keys()):
                    if i in command:
                        sub.call(f'start chrome.exe {sites[i]}', shell = True)
                        say(f'Abriendo{i}')
            #Hora
            elif 'hora' in command:
                time = datetime.now().strftime('%H:%M')
                say(f'Son las {time}')
            #Terminar proceso
            if 'termina' in command or 'terminar' in command:
                say('Hasta luego')
                break
        else:
            say(f'Por favor, dime {name}')
    except:
        print('No te entendí, ¿Podrías repetirlo?')

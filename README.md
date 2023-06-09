# printdesk
Веб-сайт, который позволяет пользователям подключать принтеры в офисах без надобности переходить по сложным сетевым ресурсам.


# Функционал пользователя
 - Пользователь переходит на сайт
 - Выбирает необходимую локацию, на которой он находится
 - Выбирает необходимый принтер (принтеры разделены по уникальным номерам в названии)
 - Жмет кнопку подключить, запускает bat файл, происходит подключение принтера

# Функционал админа
  - Добавление новых устройств
  - Удаление устройств
  - Перемещение и редактирование уже существующих устройств
  - Возможность редактировать скрипты подключения
  - Просмотр активности на сайте

# Как устроено
  Добавление принтера:
   - Администратор вводит только лишь полное сетевое название принтера, выбирает картинку и вводит IP адрес при надобности. В корне автоматически создается bat скрипт, который добавляется сразу же в БД
   - Пользователь после нажатия кнопки "Подключить" - скачивает bat файл, а после запускает этот скрипт. Скрипт обращается к принт серверу, ищет необходимый принтер и загружает его на компьютер пользователя

   # BAT SCRIPT
             
             @echo off rundll32 printui.dll,PrintUIEntry /in /n \printserver\nameprinter


# Скриншоты
![1](https://github.com/SoulBoost/printdesk/assets/117268474/d83f09a8-2678-49cb-87dc-64bd8c376f45)
![2](https://github.com/SoulBoost/printdesk/assets/117268474/1172e0b3-ac08-41aa-b3bb-e6da92c13478)
![8](https://github.com/SoulBoost/printdesk/assets/117268474/31a41e86-2266-4f6a-ae14-1b3c0e888883)
![312](https://github.com/SoulBoost/printdesk/assets/117268474/72bcfab7-9afd-4140-86c9-ab455d8b2cfc)
![3](https://github.com/SoulBoost/printdesk/assets/117268474/14385ca6-95d1-400d-a80d-535d7d6f340e)
![4](https://github.com/SoulBoost/printdesk/assets/117268474/ad80a223-c589-4e0a-a6c1-c4e068f9c496)
![5](https://github.com/SoulBoost/printdesk/assets/117268474/c1114853-49f1-4050-9597-764b5aa8af60)
![6](https://github.com/SoulBoost/printdesk/assets/117268474/2b9a6e75-726b-463b-aff8-c0ea96bbac48)
![7](https://github.com/SoulBoost/printdesk/assets/117268474/4ee9229c-1551-4bf3-91af-ed31c59abee2)



# Журнал разработки

- Нет безопасного входа в админку сайта и БД (пароли не шифрованные)
- Сделать создание принтеров по ID = номеру в названии принтера
- Сделано автосоздание скрипта по названию принтера

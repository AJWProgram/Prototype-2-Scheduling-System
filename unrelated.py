import smtplib, ssl, random, mysql.connector

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
)

temppassword = random.randint(100000,999999)

sender = 'newawprogram@gmail.com'
password = 'rplqyrvbxrjwulwz'
reciever = str(input("Please enter your email address: "))

body_msg = '''Subject: ACCOUNT RECOVERY
Hello user, we are writing to you regarding your account recovery.
Your recovery password is... ''' + str(temppassword)

context = ssl.create_default_context()

with smtplib.SMTP_SSL('smtp.gmail.com', 465, context=context) as server:
    server.login(sender, password)
    server.sendmail(sender, reciever, body_msg) 

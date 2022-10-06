import argparse

ap = argparse.ArgumentParser()
ap.add_argument('-i', '--username', required=True, help = 'path to input username')
args = ap.parse_args()
a = args.username
ap.add_argument('-i', '--username', required=True, help = 'path to input username')
args = ap.parse_args()
name = args.username

import smtplib, ssl

port = 465  # For SSL
smtp_server = "smtp.gmail.com"
sender_email = "schoolstudent1@bitsathy.ac.in"  # Enter your address
receiver_email = a   # Enter receiver address
password = 'student1@123'
message = """\
Subject: You Are Successfully Registered!

Dear {name},
Greetings!

Congratulations! We are pleased to inform you that your SOPs has been accepted for the Grand Finale of the Hackathon Event 2022.





Thanks & Regards,
The Hosting Team
Bannari Amman Institute of Technology
Sathyamangalam-638 401
Erode District, Tamilnadu
Ph: 04295-226122, 226123


"""
context = ssl.create_default_context()
with smtplib.SMTP_SSL(smtp_server, port, context=context) as server:
    server.login(sender_email, password)
    server.sendmail(sender_email, receiver_email, message)
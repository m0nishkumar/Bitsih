import sys

email = sys.argv[1]
prob_id = sys.argv[2]
import smtplib, ssl

port = 465  # For SSL
smtp_server = "smtp.gmail.com"
sender_email = "schoolstudent1@bitsathy.ac.in"  # Sender Email address
receiver_email = email   #  receiver email address
password = 'student1@123'
message = f"""\
Subject: You Are Abstract have been Approved!

Dear Participant,
Greetings!

Congratulations! We are pleased to inform you that your SOPs for the Problem code: {prob_id} has been accepted for the Grand Finale of the BIT'S HACK'22.





Thanks & Regards,
The BIT'S HACK'22 Team
Bannari Amman Institute of Technology
Sathyamangalam-638 401
Erode District, Tamilnadu
Ph: 04295-226122, 226123


""".format(prob_id)
context = ssl.create_default_context()
with smtplib.SMTP_SSL(smtp_server, port, context=context) as server:
    server.login(sender_email, password)
    server.sendmail(sender_email, receiver_email, message)
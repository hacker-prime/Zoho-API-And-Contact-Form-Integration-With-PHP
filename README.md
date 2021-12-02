

# php-contact-form-and-zoho-desk-api

<p align="center">
  <img src="https://pbs.twimg.com/profile_images/1258817039843516417/qdj2rNtA_400x400.jpg" />
</p>

This application or code allows the submission of a ticket into zoho desk through a contact form with PHP.

The ability to do this was due to using two tutorials or sources. They include the following: 

- Zoho CRM How to create records with API V2 using cURL & PHP
	> https://www.youtube.com/watch?v=ToCP_MwORAw

- PHP Code To Insert Ticket Automatically
	> https://help.zoho.com/portal/en/community/topic/php-code-to-insert-ticket-automatically-22-4-2021

Check the demonstration of this on YouTube

  > https://www.youtube.com/watch?v=AQXSMQvxEOI

I felt the need to make this because I found the process of doing this so tedious. It took me days of reading, reaching out to customer support and testing to make this work. I wished something like what I've finally stiched togther was available from the get go to make things easier.I hope this helps you 🙂.

=====> UPDATE - December 2,2021 <=====
I've tried this project on both the localhost and liveserver and it didn't work. From the localhost perspective I remembered I rebooted my computer and the changes I possibly/most likely made to various files such as php.ini or sendmail.ini and so on. I tried making those changes again but continued to get errors and I am sure I could eventually resolved them but I am pressed for time so I decided to use PHP Mailer and use the SMTP credentials from an active website I have. With that utilized, it finally started to work. However, this project is used for a client that rerquires not using PHP Mailer but SendGrid due to some issue regarding the DNS and stuff like that. I have some documents with the customer service agents from GoDaddy getting into more details on this.  The next step now is to setup a new Zoho One account to retest everthing and ensure the information is being logged into Zoho Desk.


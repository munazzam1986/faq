# faq

To run the FAQ Project:

1. git clone https://github.com/munazzam1986/faq.git
2. cd into FAQ and run composer install
3. cp .env.example to .env
4. setup database with sqlite 

Instructions for Sending Emails via FAQ Project:

1. Register into FAQ project.
2. Create a question.
3. Click on button 'Notify By Email'.
4. Enter any email address which follows general email format (example@example.com).
5. Enter the message. When done press 'Send Mail'.

I am using Mailtrap to test emails. Mailtrap is a fake SMTP server to test emails. All the emails sent from the FAQ Project will be received in Mailtrap. 
Use the following credentials to access Mailtrap.

Visit mailtrap.io
Username: munazzamm@gmail.com
Password: PHP12345

Epic and User Stories:

Epic: Adding Email Notification feature to the FAQ Project.
1. User story (1): As a user, I want to send emails via FAQ Project so to keep relevant group of people updated.
2. User story (2): As a user, I want a notification button that will navigate me to the new web page to send emails.
3. User story (3): As a user, I want a home button on the notification page so to navigate between pages easily.
4. User story (4): As a user, I want a notification button in question/answer dialog box so I can send emails from both.

Below is the link to Heroku.

https://nameless-retreat-33006.herokuapp.com/
# Case Study 02

## The Story:

Code Cafe is a new cafe coming to Tauranga that needs a simple website where the owner can change the content of the website. This includes images, text on each page and the menu items. Only the owner can login and do the admin side of the page. Visitors to the site can leave feedback and a rating that needs to be moderated first by the owner before it is displayed on the website. The owner has given you a series of stock images that you are able to use, until the cafe is ready to be opened to the public. Visitors to the site can contact the owner via a contact form. 

## Design Details:

The cafe is going for an old wood type style look and serves coffee and in house made food. It has a lot of tables that are setup for people to bring in their laptops and also offers free wifi when a purchase has been made. Images that you can use are supplied in the folder linked at the bottom of this file.

The owner wants to showcase the features that would attract the coders and developers and has given you some freedom to see what you think will work best for that.

## Goals:

This website will need to have the following pages and requirements:

* Homepage that show the details of the cafe
* A menu page that show the different types of drinks and food
* Contact page (name, email and message form)
* Feeback form (name, message and rating)
* Opening times and specials

* The website neeeds to be responsive so that the menu can be read from a mobile device

* Visitors can send messages without logging in.
* Visitors can see the status of their messages via an id like so `/contact/openissues/:id` where `:id` is the id of the message. The message can only be seen if the email used to send the message is entered.

* The owner can login and change ALL of the content except the navbar and header.
* The owner can approve feedback messages and ratings
* The owner can see the contact messages and reply to them, these will only be visible by the visitors once they type in the matching email address.

## Files supplied:

* Sketched Wireframes with a rough design layout, you are free to make minor changes to these
* ERD of the database that needs to be created
* Placeholder images
# Case Study 03

## The Story:

You are wanting to make a website where developers can show off their skills and create a profile that they can share with other people. It is kind of like linkedIn profiles, but without the social media posting.
People can upload a photo of themselves that will be the profile image and the website has the following options:

* Link your Code repositories (example is link to your GitHub account)
* Link to your social media accounts
* Good article section (post your top 5 five books and articles you have read about something that relates to code)

A user can sign up and chooses a username which has to be unique.

The user profile can then be accessed by a URL endpoint like `/profiles/:id` where :id is their username.

The profiles will be public, but only the owner of the profile can edit it.
There will need to be a master Admin account that can manage all accounts.

## Design Details:

Since this is your website you can make a lot of the design decisions, however there need to be 2 versions. A light theme and a dark theme that a visitor can switch between.

## Goals:

This website will need to have the following pages and requirements:

* Homepage
* Profile pages
* Visitors can view every page, but not edit them
* Login Page

* Only the profile owner and the Admin can edit the pages
* A profile owner can only edit their own page, nothing else
* A visitor can submit feedback which a profile owner can respond to. 
* The messages can only be seen by the visitor if they know the message id and the email address they used when they send the message. The endpoint will need to look like this: `/contact/:profile_owner_id/:message_id` where `:id` is the id of the message. The message can only be seen if the email used to send the message is entered.

## Files supplied:

* Sketched Wireframes with a rough design layout, you are free to make minor changes to these
* ERD of the database that needs to be created
* The user profiles for you to use can be found here [https://randomuser.me](https://randomuser.me)


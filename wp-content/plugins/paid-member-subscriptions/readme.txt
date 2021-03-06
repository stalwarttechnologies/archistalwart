=== Membership & Content Restriction - Paid Member Subscriptions ===
Contributors: cozmoslabs, iova.mihai, madalin.ungureanu, adispiac, sareiodata, reflectionmedia
Donate link: http://www.cozmoslabs.com/wordpress-paid-member-subscriptions/
Tags: membership, paid membership, membership plan, membership level, member, members, subscription plans, user payments, paying users, paid users, restrict content, restrict access, content protection, content restriction, recurring payments

Requires at least: 3.1
Tested up to: 4.6.0
Stable tag: 1.2.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Accept user payments, create subscription plans and restrict content on your membership website.

== Description ==

**Paid Member Subscriptions is membership made easy.**

**Like this plugin?** Consider leaving a [5 star review](https://wordpress.org/support/view/plugin-reviews/paid-member-subscriptions?filter=5).

It offers a complete membership solution, allowing you to accept member payments, manage members, create subscription plans and restrict access to premium content.

To start simply create a new page and give it an intuitive name(e.g. Member Registration) and add the following shortcode: [pms-register].
Publish the page and you are done!

= Shortcodes for Member Registration, Login, Content Restriction and managing Membership Plans =
You can use one of the following shortcodes:

* **[pms-register]** - adds a front-end user registration form where members can sign-up for a membership level
* **[pms-login]** - to add a front-end member login form
* **[pms-restrict subscription_plans="9,10"]** *Special content for members subscribed to the subscription plans that have the ID 9 and 10!* **[/pms-restrict]** - to restrict content based on subscription plans or logged in status
* **[pms-account]** - allows members to edit their account information and manage their subscription plan(s)
* **[pms-subscriptions]** - output subscription plans form and allow users to subscribe to new membership plans (use <em>subscription_plans</em> shortcode parameter to display only certain plans)
* **[pms-payment-history]** - adds a front-end table with the member's payment history

Please browse our [plugin description page](http://www.cozmoslabs.com/wordpress-paid-member-subscriptions/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) for more information regarding shortcode parameters and plugin modules.

https://www.youtube.com/watch?v=6AEIvvCOZHM&start=0&autoplay=1

= Membership Modules: =

= Content Restriction =
 You'll find it quite simple to restrict entire posts, pages or custom post types or just portions of them.

 Restrict Content offers you options to:

 * display content based on logged in status
 * show content to members only, based on their subscription plan(s)
 * partial content display by using [pms-restrict][/pms-restrict] shortcode

= Membership Payments =
Accept PayPal payments from your subscribers. You can keep track of all member payments, payment statuses and purchased subscription plans.

= Hierarchical Subscription Plans =
You can create an unlimited number of hierarchical subscription plans (eg: free, silver, gold). Each subscriber can choose a membership plan (subscription) during the registration process.
Also, existing members can upgrade their subscription plan from their account page.

You can setup subscription plans to have free and/or paid memberships on your site.

= Members Management =
Have an overview of all your members and their subscription plans. Easily add/remove members or edit their subscription details.

= Member Emails and Messages =
Customize default member emails and setup member messages sent/displayed on certain user actions.


= Powerful Add-ons =

Paid Member Subscriptions has a range of premium [Add-ons](http://www.cozmoslabs.com/paid-member-subscriptions-add-ons/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) that allow you to extend the power of the membership plugin:

**Basic Add-ons** (available in the [PRO or Hobbyist](http://www.cozmoslabs.com/wordpress-paid-member-subscriptions/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) version)

* [Global Content Restriction](http://www.cozmoslabs.com/add-ons/global-content-restriction/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - add global content restriction rules to subscription plans, based on post type, taxonomy and terms
* [Discount Codes](http://www.cozmoslabs.com/add-ons/discount-codes/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - create an unlimited number of discount codes and offer percentage or flat rate based discounts
* [Email Reminders](http://www.cozmoslabs.com/add-ons/email-reminders/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - create multiple automated email reminders that are sent to members before or after certain events take place (subscription expires, subscription activated etc.)
* [Navigation Menu Filtering](http://www.cozmoslabs.com/add-ons/navigation-menu-filtering/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - dynamically display menu items based on logged-in status as well as selected subscription plans

**Pro Add-ons** (available in the [PRO version](http://www.cozmoslabs.com/wordpress-paid-member-subscriptions/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) only)

* [Recurring Payments for PayPal Standard](http://www.cozmoslabs.com/add-ons/recurring-payments-paypal-standard/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - accept recurring payments from your members through PayPal Standard
* [PayPal Pro & PayPal Express](http://www.cozmoslabs.com/add-ons/paypal-pro-paypal-express/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - accept one-time or recurring payments through PayPal Pro (credit card) and PayPal Express Checkout
* [Stripe Gateway](http://www.cozmoslabs.com/add-ons/stripe/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - accept credit card payments, both one-time and recurring, directly on your website via Stripe
* [Content Dripping](http://www.cozmoslabs.com/add-ons/content-dripping/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - create schedules for your content, making posts or categories available for your members only after a certain time has passed since they signed up for a subscription plan
* [Multiple Subscriptions per User](http://www.cozmoslabs.com/add-ons/multiple-subscriptions-per-user/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree) - setup multiple subscription level groups (e.g. Physics, Math) and allow members to sign up for more than one subscription plan, one per group (e.g. Physics Beginner and Math Advanced)


= Website =

http://www.cozmoslabs.com/wordpress-paid-member-subscriptions/

= Documentation =

http://www.cozmoslabs.com/docs/paid-member-subscriptions/

= Addons =

http://www.cozmoslabs.com/paid-member-subscriptions-add-ons/

== Installation ==

1. Upload the paid-member-subscriptions folder to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Create a new page and use one of the shortcodes available. Publish the page and you're done!

== Frequently Asked Questions ==

= What type of membership sites can I create? =

Here are some examples of what you could sell from your membership site: premium tutorials, newsletter, magazine, database, online community, software, apps, videos, ebooks, audio files, discount codes, fan clubs, consulting, coaching etc.

= Can my members pay using a credit card? =

The subscription plan payments are handled via PayPal Standard. Your members will be able to pay for the membership via their credit card or their PayPal account. More payment gateways are supported via [Add-ons](http://www.cozmoslabs.com/paid-member-subscriptions/?utm_source=wp.org&utm_medium=pms-description-page&utm_campaign=PMSFree).

= Can I offer both free and paid memberships at the same time? =

Yes, you can have both free and paid memberships on your site.

= Can I restrict access to premium content allowing only paying users to view it? =

Yes, the plugin allows you to restrict content and make it available to paid members only.

= Where can I find out more information? =

For more information please check out [Paid Member Subscriptions documentation](http://www.cozmoslabs.com/docs/paid-member-subscriptions).


== Screenshots ==
1. Basic Information page for Paid Member Subscriptions - membership plugin
2. Subscription Plans listing from Paid Member Subscriptions - membership plugin
3. Adding a New Membership Plan
4. Member Registration Page - front-end membership plans listing
5. Member Login Page - front-end user login form
6. Member Account Page
7. Member Lost Password Page
8. Restrict Content - posts, pages, custom post types
9. Members Management
10. Add New/Edit Member on your Membership site
11. Membership Payments
12. Settings - setup PayPal payment gateway used to accept payments
13. Settings - Content Restriction Messages
14. Settings - customize default member emails
15. Add-ons - Paid Member Subscriptions


== Changelog ==
= 1.2.8 =
* New: Paid Member Subscriptions and Profile Builder are now compatible when using Profile Builder's E-mail Confirmation feature

= 1.2.7 =
* New: Added manual payment gateway
* Misc: Small text formatting fixes

= 1.2.6 =
* New: Added an Uninstall tool that removes all custom data saved by the plugin in the database

= 1.2.5 =
* New: Added a WP Dashboard payments summary box, with a brief income report for the current month, current day and also a list of the latest completed payments
* Misc: Small refactoring to the redirect to success page from Profile Builder forms
* Misc: Small code clean-up and new comments added to certain class properties and methods

= 1.2.4 =
* Misc: Code clean-up and small refactoring

= 1.2.3 =
* Fixed: Password Reset security issue

= 1.2.2 =
* New: Added a Recent Payments table in the edit screen of the member for a quick view of the member's latest payments
* New: Added new developer hooks in the pms_get_payments(), pms_get_members() and pms_get_users_non_members() functions
* Fixed: WordPress database warning when using the search form the Payments admin screen
* Misc: Minor admin CSS improvements

= 1.2.1 =
* New: Added the "pms_payment_updated" developer hook after a payment was updated.
* New: Added the "pms_email_subject" and "pms_email_content" developer hooks to filter the subject and content of an e-mail before sending it.
* Misc: Refactored the code that manages the content filtering

= 1.2.0 =
* New: We now load the plugin translation from the current theme in the folder local_pms_lang if it exists otherwise normally from the plugin dir
* New: Added "refunded" status for payments
* Fixed: PHP warning that appeared in [pms-payment-history] shortcode
* Fixed: Content restriction bug that permited access to the post's excerpt on archive pages

= 1.1.9 =
* New: Admin option to select whether the currency appears before or after the subscription's price
* New: Added HTML "id" parameter to all forms outputted by the plugin

= 1.1.8 =
* New: Added new shortcode [pms-payment-history] to display the user's payment history
* Fixed: Subscription price and description show up once again on front end forms when only one subscription plan is present
* Fixed: Fixed issues with PMS_Email class that throw PHP notices

= 1.1.7 =
* New: Admins can now edit payments from the WordPress admin area
* New: The user's last login time is now saved in the 'last_login' user's meta, for usage by add-on developers
* Misc: Member Subscription start time is saved now as the current time, not the one at the ending of the day
* Misc: Extended the PMS_Email class with new functionality

= 1.1.6 =
* New: Added a new developer hook "pms_update_check" that executes when the plugin updates automatically
* New: Refactored display of the subscription plans when only one option is available from single input radio field to hidden field
* Misc: Discount Code code is now saved in the payments table and is displayed in the admin area for each payment that was made with a discount code
* Misc: Minor front-end CSS improvements

= 1.1.5 =
* New: Added a delete payment action in the admin Payments table
* New: Added two new hooks for the subscriptions plan table in account short code
* Fixed: Subscription Plan custom user role is now added only on plan activation
* Misc: Minor CSS fixes

= 1.1.4 =
* Added front-end JavaScript helper functions for add-on developers
* Small refactoring to better integrate future payment gateways

= 1.1.3 =
* Small refactoring to better integrate future payment gateways

= 1.1.2 =
* Added possibility to load translations
* Small refactoring to better integrate future payment gateways

= 1.1.1 =
* New PayPal IPN validation system
* Refactoring to better integrate future payment gateways

= 1.1.0 =
* Small refactoring to better integrate future payment gateways

= 1.0.9 =
* [pms-restrict] shortcode has new attribute "display_to" which can take the value "not_logged_in" to show content only to logged out users
* [pms-subscriptions] now redirects the user back from the payment gateway to the website
* Added new hooks for increased functionality options
* Minor CSS changes
* Minor bugs and improvements

= 1.0.8 =
* Fixed issue where PayPal IPN was not working on certain servers
* Fixed bug where the slug of any post could not be modified
* Added new hooks for increased functionality options
* Various minor bugs and refactoring

= 1.0.7 =
* Added plugin update checker method

= 1.0.6 =
* The IP address of the user registering a payment gets saved for each payment
* Fixed bug where post slug could not be changed
* Added new hooks for renew, upgrade and retry forms

= 1.0.5 =
* Added 'redirect_url' attribute to the [pms-recover-password] shortcode

= 1.0.4 =
* Fixed issues with payment gateways functions

= 1.0.3 =
* Refactored the general payment gateway processes to better integrate future payment gateways
* Fixed logout redirect issue that was interfering with Profile Builder
* Changed e-mails mime type to text/html

= 1.0.2 =
* Changed [pms-new-subscription] shortcode to [pms-subscriptions]
* Added Bulk Add New members feature

= 1.0.1 =
* Minor modifications in the readme file
* Minor bug fix for [pms-account] shortcode
* Updated functionality for the [pms-new-subscription] shortcode

= 1.0.0 =
* Initial release.
'Phone Campaign logs'.

This module will help you to track an outbound call passed during a phone Marketing Campaign in Sugar 7.2.
When the user logs a call linked to a contact and also to an opportunity which is related to a campaign, 
then a Campaign log will be created. This Campaign log will be related to the contact and the campaign and 
will show a new Campaign activity task: 'Phone Call'.

Here is a typical use case:
The Sales rep calls the Contact and he logs the Call. At the sametime, he wants Sugar to generate a Campaign Log.
* from a contact detail page
* log a call
  - click on the (+) button to create a new 'Call' record
  - Sugar will bring a new 'Call' page
  - link the call to the contact (please pay attention that the default behavior is to link the call to the account, you must change this)
  - link the call to an opportunity (this is a custom relationship)
  - this opty has to be related to a Marketing Campaign
  - save
  - a new Campaign Log will appear in the sub pannel below the Contact detail view.

Remark: 
Each time you create a new call, a new Campaign log is created.
Updating an existing call will not generate a Campaign log.

Installation:
- Upload the zip file in the archive with the Module Loader
- Build & Repair

Copyright July 2014 Olivier Nepomiachty - All rights reserved.

Remark:
This module is designed for Sugar 7.2 only, any Edition. It will be updated when the Calls module will use the Sugar 7 sidecar framework.

Release notes:
v 1.0.0.14 - 9 July 2014
Original release.

## EMTA ZVAPP

# Needed tables

* barangay - need seeder
* landuseclass - need admin add and edit form
* mapdbfinfo - need admin add and edit form
* mapdbfinfohistory - store here previous data from the mapdbinfo update per row
* paymentsettings - need seeder, and form in admin to update, make a master table or master list for this one, list of payments and allow admin users to add and update
* projecttype - need seeder but data is too many, you could opt in creating a seeder or just the table dump
* smsoutbound
* smslogs
* smsinbound
* setupinformation - for printing, create master list or table able to add and edit, retain current data
* transaction
* transactionfiles
* transactionconditions
* transactionremarks
* useractivitylogs - Users side
* userlist - Admin side

# Functionalities

* Send remarks (SMS - EMAIL) will have a new page, list of transactions, then put Remarks action button, send remarks per transaction to transaction owner
* Payment, separate table, - for ornum, ordate, or fields with transaction id as foreign key

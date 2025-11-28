# Hospital management system
- Webová aplikace umožňující správu pacientů a lékařů.
- Uživatel může vytvářet, upravovat a mazat záznamy.
- Projekt slouží jako trénink PHP a MySQL.
  
## Back-end:
- using PHP
- MySql

## Front-end:
- Bootstrap 5
## Funkce
- Registrace a správa záznamů
- REST API
- Validace formulářů

For running this app first you must create database hms and tables in MySql database.<br/>
Application is divided into three section: patient, doctor and admin.<br/>
Admin can confirm doctors status.<br/>
Report is for sending message to doctors from patients
### Tables:

admin:
 - Id(PRI , int)
 - password(varchar)
- username(varchar)

doctors:
- Id(PRI , int)
- country(varchar)
- data_reg(varchar)
- email(varchar)
- firstname(varchar)
- gender(varchar)
- password(varchar)
- phone(varchar)
- profile(varchar)
- salary(varchar)
- status(varchar)
- surname(varchar)
- username(varchar)

patient:
- ID(PRI , int)
- country(varchar)
- data_reg(varchar)
- email(varchar)
- firstname(varchar)
- gender(varchar)
- password(varchar)
- phone(varchar)
- profile(varchar)
- surname(varchar)
- username(varchar) 

report:
- ID(PRI, int)
- date_send(varchar)
- message(varchar)
- title(varchar)
- username(varchar)

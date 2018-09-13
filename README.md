# kata-invoice-reminder
kata sur la relance de facture. Inspiré du "birthday greetings" kata

# But
Votre entreprise gère ses factures avec un vieil applicatif Legacy exposant du Soap.

Il vous est demandé de faire une application à coté, pour gérer la relace de paiement des factures.

L'application Legacy vous permet de retrouver les factures non payées. Il n'est pas possible de filtrer. 

Vous devez implémenter un programme permettant de charger les données de facturation, et qui pourra notifier les débiteurs qu'ils ont une facture à payer.


# Description des données

chaque facture est définie comme tel dans la reponse xml: 

les dates sont décomposées en 3 champs:

         - year:2017

         - month:8
         
         - day: 12
         
         = le 12 Aout 2017


le "due date" correspond à la date d'échéance de la facture: date à laquelle elle doit avoir été payée

le "payment date" correspond à la date à laquelle la facture a été payée

le contact est la personne à contacter.

le "price" est le prix, en centime d'euros.

# Règles métier

* 10 jours avant la date d'échéance d'une facture, le débiteur est notifié par un mail pour le prévenir de la date d'échéance.

* une fois la date d'échéance passée, si la facture n'est toujours pas payée, on le relance chaque mois au même jour.

* Règle spéciale: Si le même jour n'existe pas (ex: le 31 pour certains mois), on notifie le dernier jour du mois (par exemple le 30, ou le 28/29 pour février).



# Format de l'email
le mail pré-échéance sera au format:

```
Subject: Votre Facture n° 12EDF432
Bonjour Doe John,
Nous attendons votre réglement de 23.00€ pour le 12/02/2017

Cordialement,
Le Service Facturation
```

le mail de relance sera au format:

```
Subject: Relance pour votre Facture n° 12EDF432
Bonjour Doe John,
Sauf erreur ou omission de notre part, le paiement de la facture n° 12EDF432 datée du 12/02/2017 pour un montant de 23.00 euros, et arrivée à échéance le 12/02/2017, ne nous est pas parvenu. 

Vous remerciant de faire le nécessaire,
Le Service Juridique
```

# Focus

La stratégie de test (TU,TI)

Model métier vs interractions extérieures 

Faire du code facilement testable

Faire du code ouvert aux évolutions






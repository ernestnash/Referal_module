# Patient Referral System
This Laravel project is a patient referral system that allows healthcare providers to refer patients to other healthcare facilities and track the status of those referrals.

## Features  

The patient referral system includes the following features:
- Client registration using national ID verification

- Capture of client medical information and clinical summary

- Referral creation with priority level, reason, diagnosis, and physician/provider details

- Referral status tracking (active, pending, cancelled, successful)

- Referral feedback with accepted/declined status, treatment plan, and follow-up details

## Installation

  

To install the patient referral system, follow these steps:

  

1. Clone the repository

2. Run `composer install`

3. Copy the `.env.example` file to `.env` and configure your database settings

4. Run `php artisan migrate` to create the database tables

5. Run `php artisan serve` to start the development server

  

## Usage

  

To use the patient referral system, follow these steps:

  

1. Register a new client using their national ID

2. Enter the client's medical information and clinical summary

3. Create a referral with the necessary details, including priority level and physician/provider information

4. Track the status of the referral and receive feedback when it is accepted or declined

  

## API Documentation

  

The patient referral system includes an API that can be used to interact with the system programmatically. API documentation is available in the `docs` folder of the project.

  

## Guidelines

  

The patient referral system follows the guidelines set forth by the Ministry of Health for patient referrals. The following information is captured for each referral:

  

- Full name of the client being referred

- Unique identifier number (IP/OP)

- Client address and phone number

- Next of kin (name, address, and phone number)

- Date and hour of referral

- Client date of birth, age, and sex

- Reason for referral

- Diagnosis, if known

- Treatment given, diagnostic work-ups done, client's vital signs

- Name and relevant details of physician or provider making the referral

- Signature of the referring health worker

- Name of the referring clinic or unit or facility

- Client medical history

- Name of the receiving clinic or unit or facility

  

## Contributing

  

We welcome contributions to the patient referral system! To contribute, follow these steps:

  

1. Fork the repository

2. Create a new branch for your changes

3. Make your changes and commit them

4. Push your changes to your forked repository

5. Create a pull request

  

## License

The patient referral system is open source software licensed under the MIT License. See the `LICENSE` file for more information.

## Flowchart

![Patient Referral System Flowchart](https://imagestum.blob.core.windows.net/diagrams/Flow%20chart.png)

The flowchart shows the high-level process flow for the patient referral system. The process begins with client registration, and continues with the capture of medical information and clinical summary. A referral is then created, and the referral status is tracked until feedback is received.

## Use Case Diagram

![Patient Referral System Use Case Diagram](https://imagestum.blob.core.windows.net/diagrams/Referral%20version%202-Use-case%20diagram.drawio%20(2).png)

The use case diagram shows the different actors that interact with the patient referral system and the use cases that they can perform. The actors include the client, referring health worker, referral coordinator, receiving facility and shared health record

## Activity Diagram


![Patient Referral System Flowchart](https://imagestum.blob.core.windows.net/diagrams/Referral%20version%202-Page-6.drawio.png)

The flowchart shows the high-level process flow for the patient referral system. The process begins with client registration, and continues with the capture of medical information and clinical summary. A referral is then created, and the referral status is tracked until feedback is received.


## Data Flow Diagram

![Patient Referral System Data Flow Diagram](https://imagestum.blob.core.windows.net/diagrams/WhatsApp%20Image%202023-04-14%20at%202.50.16%20PM.jpeg)

The data flow diagram shows the flow of information in the patient referral system. The system captures information about clients, medical information, referrals, and feedback, and stores this information in a database. The information is then used to generate reports and provide feedback to the referring health worker.)

The activity diagram shows the detailed process flow for creating a referral in the patient referral system. The process begins with the creation of a new referral, and continues with the selection of the referral priority, entry of the diagnosis and reason for referral, selection of the physician/provider, and submission of the referral. The process concludes with the tracking of the referral status until feedback is received.
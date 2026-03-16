# Clinic Database Schema

## Part 1: Normalization

| Table Name | Primary Key | Foreign Key | Normal Form | Description |
| :--- | :--- | :--- | :--- | :--- |
| Patients | patient_id | None | 3NF | Stores patient profile info |
| Doctors | doctor_id | None | 3NF | Stores doctor profile info |
| Appointments | appointment_id | patient_id, doctor_id | 3NF | Stores appointment scheduling info |
| Prescriptions | prescription_id | appointment_id | 3NF | Stores prescription info per appointment |
| Medicines | medicines_id | None | 3NF | Stores medicine info |
| Prescription_medicines | id | prescription_id, medicine_id | 3NF | Junction table for Prescriptions and Medicines |

## Part 2: Relationships
- **Patients to Appointments:** One-to-Many (1:N). Một bệnh nhân có thể có nhiều lịch hẹn khám.
- **Doctors to Appointments:** One-to-Many (1:N). Một bác sĩ có thể có nhiều lịch hẹn khám.
- **Appointments to Prescriptions:** One-to-Many (1:N). Một lịch hẹn có thể có nhiều đơn thuốc.
- **Prescriptions to Prescription_medicines:** One-to-Many (1:N). Một đơn thuốc có thể chứa nhiều loại thuốc.
- **Medicines to Prescription_medicines:** One-to-Many (1:N). Một loại thuốc có thể xuất hiện trong nhiều đơn thuốc.

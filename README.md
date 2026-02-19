# UNEP Environmental Mission Tracker (EMT)
**Project Category:** Business Process Automation & Information Management
**Role Level:** G6 Information Systems Assistant Technical Deliverable

---

## 1. Executive Summary
The UNEP Environmental Mission Tracker (EMT) is a digital solution developed to replace legacy manual reporting workflows. By centralizing mission data into a structured MySQL environment via a Vue.js/PHP interface, the EMT ensures data integrity and provides real-time insights for environmental decision-making.

## 2. Technical Stack
- **Frontend:** Vue.js 3 (Reactive UI, Fetch API for asynchronous synchronization)
- **Backend:** PHP 8.x (RESTful API, PDO with Real Prepared Statements for SQL injection prevention)
- **Database:** MySQL (Relational Schema with ENUM constraints for data normalization)
- **Version Control:** Git (Utilizing .gitignore for security compliance)

## 3. Project Sustainability & Institutional Memory
To ensure this system remains maintainable by future staff, the following professional standards have been applied:
- **Configuration Templates:** A `config.sample.php` is provided to allow seamless deployment across different UN environments (e.g., Azure PaaS) without exposing production credentials.
- **Separation of Concerns:** Business logic (JS), system logic (PHP), and assets (CSS/JS) are isolated in a modular folder structure to simplify future upgrades.
- **Technical Documentation:** Comprehensive inline code commenting and schema definitions ensure technical transparency for the peer-review process.

## 4. Setup & Installation (SOP)
1. **Infrastructure:** Import the `/database/schema.sql` file into a MySQL server.
2. **Configuration:** Copy `backend/config.sample.php` to `backend/config.php` and update the database credentials for the local environment.
3. **Deployment:** Move the root folder to the server's public directory (e.g., `htdocs`) and access via `http://localhost/unep-tracker/frontend/`.

## 5. Security & Accountability
- **Credential Protection:** `backend/config.php` is explicitly ignored by the `.gitignore` to prevent unauthorized access to system credentials.
- **Data Validation:** All inputs are quality-assured via backend sanitization and frontend validation to meet UNEP mapping and data reporting rules.

---
*Developed for the UNEP Office of Science as a proof of concept for automated environmental reporting.*
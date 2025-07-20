**Clinical Trial Reporting Web Application (RTS'S)**
- This project is a web-based application designed to support data access and reporting for a clinical trial study known as RTS'S. The system integrates with a Microsoft SQL Server database and is developed using PHP for the backend logic and user interface.

**Overview**
- The primary objective of this application is to enable streamlined, secure access to clinical trial data through dynamically rendered reports tailored to each user's access privileges. The platform is optimized for usability and security, ensuring that different stakeholders—such as clinical coordinators, data managers, and analysts—can view only the reports relevant to their roles.

**Key Features**
- User Registration: New users can register securely to gain access to the system, subject to administrator approval and role assignment.
- User Login: Authenticated access with session-based login ensures secure access to clinical trial data.

**Role-Based Report Access**
- Reports are rendered dynamically based on the user's access level. For instance:

- Clinical staff can view patient-level reports.
- Data managers can view site-level summaries.
- Administrators have access to full trial metrics and audit trails.

**Technology Stack**
- Frontend & Backend: PHP
- Database: Microsoft SQL Server
- Authentication: Custom session-based login system
- Deployment Environment: Web server compatible with PHP and MSSQL connectivity

**Use Case**
- This system was deployed in the context of a real-world clinical trial study, RTS'S, and has been used to:
- Monitor patient recruitment
- Track data entry and protocol compliance
- Generate compliance and monitoring reports

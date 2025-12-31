# Server‑Side Scripting Project – PHP, Node.js, Java

This project demonstrates a full exploration of **server‑side scripting**, combining research, design and implementation. It includes a multi‑page PHP web application with authentication, CRUD operations, database interaction, and dynamic content rendering. The work was developed in **Visual Studio Code** as part of the Access to Higher Education Diploma in Computing.

---

## Project Overview

The project consists of two major components:

1. **Research Phase**  
   A detailed investigation into server‑side scripting principles, languages, vulnerabilities, and security considerations.

2. **Practical Implementation**  
   A functional PHP‑based content management system (CMS) with login, staff pages, page creation, editing, deletion, and database connectivity.

---

## Research Summary

### Server‑Side Scripting Principles
The research covers:
- How server‑side scripts generate dynamic content  
- Interaction between server, client, and database  
- Security considerations (authentication, sanitisation, validation)  
- Real‑time content updates and personalised user experiences  

### Languages Investigated
Three major server‑side languages were analysed:

#### **PHP**
- Easy to learn, widely supported, strong database integration  
- Vulnerabilities: SQL injection, XSS, file inclusion  
- Strengths: open‑source, flexible, large ecosystem  

#### **Node.js**
- Event‑driven, non‑blocking I/O  
- Ideal for real‑time applications  
- Vulnerabilities: insecure cryptography, prototype pollution, weak session handling  

#### **Java**
- Robust, scalable, secure  
- Suitable for enterprise‑level systems  
- Vulnerabilities: LDAP injection, second‑order SQL injection  

### Security Considerations
The research highlights:
- Input validation  
- Sanitisation  
- Secure session handling  
- Avoiding weak cryptography  
- Preventing SQL injection and XSS  

---

## System Design

### Requirements
The system must:
- Allow staff to log in securely  
- Enable adding, editing, and deleting content  
- Support staff registration  
- Provide a user‑friendly interface  
- Interact with a MySQL database  
- Use PHP sessions for authentication  
- Maintain a responsive layout  

### Specifications
- **Frontend:** HTML, CSS, Bootstrap  
- **Backend:** PHP  
- **Database:** MySQL  
- **IDE:** Visual Studio Code  
- **Architecture:** Modular PHP includes (header, footer, functions, config)  

### File Structure  
/includes  
header.php  
footer.php  
functions.php  
constants.php  
connection.php  
config.php  
  
index.php  
template.php  
content.php
new_page.php  
create_page.php  
edit_page.php  
delete_page.php  
staff.php  
login.php  
register_form.php  
admin_page.php  
user_page.php  
logout.php  
public.php  


---

## 💻 Implementation Details

### 🔹 Authentication (login.php)
- Validates user credentials  
- Uses hashed passwords (MD5 in assignment context)  
- Redirects users based on role (admin/user)  
- Uses PHP sessions for secure access  

### 🔹 Content Management (content.php)
- Displays selected page  
- Allows editing and deleting pages  
- Uses MySQL queries to fetch and update content  

### 🔹 Page Creation (new_page.php & create_page.php)
- Form for adding new pages  
- Inserts new records into the database  
- Validates input before submission  

### 🔹 Staff Management (staff.php)
- Staff menu with links to content management and user registration  
- Supports adding new staff accounts  

### 🔹 Database Interaction
- MySQL used for storing:
  - Users  
  - Pages  
  - Content  
- Connection handled through `connection.php`  

### 🔹 Template System (template.php)
- Reusable layout  
- Includes navigation, header, footer  
- Ensures consistent UI across pages  

---

## 🧪 Testing & Debugging

Testing included:
- Login validation  
- Page creation and deletion  
- Editing content  
- Navigation between pages  
- Database connectivity  
- Error handling for invalid input  

Debugging involved:
- Fixing SQL query errors  
- Handling undefined variables  
- Ensuring session persistence  
- Correcting broken links and includes  

---

## 🚀 Future Improvements

- Replace MD5 with modern hashing (bcrypt/Argon2)  
- Add role‑based permissions  
- Implement prepared statements to prevent SQL injection  
- Add AJAX for smoother interactions  
- Improve UI with modern frameworks (Tailwind/Bootstrap 5)  
- Add pagination and search features  

---

## Technologies Used

- **PHP**  
- **MySQL**  
- **HTML5 / CSS3**  
- **Bootstrap**  
- **Visual Studio Code**  
- **XAMPP** (Apache + MySQL)  

---

## Author

**Abdulrazig Adam**  
Access to Higher Education Diploma – Computing  
Birmingham Metropolitan College (Sutton Coldfield)

---

## 📄 License

This project is for academic and educational use.


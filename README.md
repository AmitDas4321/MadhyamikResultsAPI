```markdown
# 📘 MadhyamikResultsAPI

**MadhyamikResultsAPI** is a simple and fast REST API that provides WBBSE Madhyamik 2025 results using roll number and date of birth. Ideal for developers, educational portals, and result-checking apps. Returns structured JSON data instantly.

---

## 🖇️ Base URL

```

[https://api.linkpc.net/WBBSE/Madhyamik-Results/](https://api.linkpc.net/WBBSE/Madhyamik-Results/)

```

---

## 📥 Usage

### ✅ Required Parameters

| Parameter | Type   | Description                        |
|-----------|--------|------------------------------------|
| roll_no   | string | Student's Roll Number (e.g. `601382N0010`) |
| dob       | string | Date of Birth in `YYYY-MM-DD` format (e.g. `2008-08-14`) |

---

### 🔗 Example Request

```

GET [https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll\_no=601382N0010\&dob=2008-08-14](https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=601382N0010&dob=2008-08-14)

````

---

## 📤 JSON Response Example

```json
{
  "status": "success",
  "data": {
    "name": "SHILPA DULEY",
    "roll_number": "601382N0010",
    "registration_number": "5242062537",
    "dob": "Aug. 14, 2008",
    "school": "GARGARIA SUBHAS HIGH SCHOOL",
    "subjects": [
      {
        "subject": "First Language",
        "total_marks": "100",
        "obtained_marks": "25",
        "grade": "C"
      },
      {
        "subject": "Second Language",
        "total_marks": "100",
        "obtained_marks": "25",
        "grade": "C"
      },
      {
        "subject": "Mathematics",
        "total_marks": "100",
        "obtained_marks": "25",
        "grade": "C"
      },
      {
        "subject": "Physical Science",
        "total_marks": "100",
        "obtained_marks": "30",
        "grade": "C"
      },
      {
        "subject": "Life Science",
        "total_marks": "100",
        "obtained_marks": "27",
        "grade": "C"
      },
      {
        "subject": "History",
        "total_marks": "100",
        "obtained_marks": "26",
        "grade": "C"
      },
      {
        "subject": "Geography",
        "total_marks": "100",
        "obtained_marks": "28",
        "grade": "C"
      },
      {
        "subject": "Opt. Elective",
        "total_marks": "100",
        "obtained_marks": "92",
        "grade": "AA"
      }
    ],
    "grand_total": {
      "total_marks": "700",
      "obtained_marks": "186"
    },
    "overall_grade": "C",
    "remarks": "PASS"
  }
}
````

---

## ❌ Error Response

```json
{
  "status": "error",
  "message": "Invalid Roll Number or DOB"
}
```

---

## ⚙️ Use Cases

* Result Checking Portals
* Educational Apps
* School Dashboards
* Bulk Automation Tools

---

## 🚀 cURL Example

```bash
curl "https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=601382N0010&dob=2008-08-14"
```

---

## 📩 Contact

Need help or want to contribute?

📧 Email: [support@linkpc.net](mailto:support@linkpc.net)
🌐 Website: [https://linkpc.net](https://linkpc.net)

---

## 📄 License

This API is free for public and educational use. Commercial use requires permission.

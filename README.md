# 📘 WBBSE MadhyamikResultsAPI

**WBBSE MadhyamikResultsAPI** is a high-performance, developer-friendly, and publicly accessible RESTful API that enables you to fetch the official results of the **West Bengal Board of Secondary Education (WBBSE)** Madhyamik (Class 10) examination for 2025. It delivers structured JSON responses using just the student's Roll Number and Date of Birth, making it an ideal solution for educational platforms, mobile apps, dashboards, and automation scripts.

---

![WBBSE MadhyamikResultsAPI Banner](https://i.ibb.co/9FzH0Rj/WBBSE-Madhyamik-Results-API.jpg)

---

## 🔍 What is WBBSE MadhyamikResultsAPI?

WBBSE MadhyamikResultsAPI is designed to simplify the process of retrieving examination results by offering a seamless integration experience. Whether you're building dashboards for schools, mobile apps for students, or automation tools for educational institutions, this API ensures accurate and real-time data delivery in a developer-friendly format.

---

## 🌐 Base Endpoint

```
https://api.linkpc.net/WBBSE/Madhyamik-Results/
```

---

## ⚙️ How It Works

1. The client sends a **GET request** to the API endpoint with the following query parameters:
   - `roll_no` — The student's official roll number.
   - `dob` — The student's date of birth in `YYYY-MM-DD` format.
2. The API validates the inputs and fetches the corresponding result data.
3. A structured JSON response containing the student's results is returned.
4. If the inputs are invalid, a detailed error message is provided.

---

## 🛠️ How to Use

### 🔗 Example API Request

```
GET https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=810149A1519&dob=2004-09-13
```

> Replace `roll_no` and `dob` with the actual student data.

### ✅ Query Parameters

| Parameter | Type   | Required | Description                                 |
|-----------|--------|----------|---------------------------------------------|
| `roll_no` | string | Yes      | The student's Roll Number (e.g., 701482N0025) |
| `dob`     | string | Yes      | The student's Date of Birth (format: YYYY-MM-DD) |

---

## 📤 API Responses

### ✅ Successful Response

Below is an example of a successful response with dummy data:

```json
{
  "status": "success",
  "data": {
    "name": "AMIT DAS",
    "roll_number": "810149A1519",
    "registration_number": "6345078542",
    "dob": "Sep. 13, 2004",
    "school": "GARGARIA SUBHAS HIGH SCHOOL",
    "subjects": [
      {
        "subject": "First Language",
        "total_marks": "100",
        "obtained_marks": "88",
        "grade": "A"
      },
      {
        "subject": "Second Language",
        "total_marks": "100",
        "obtained_marks": "90",
        "grade": "A"
      },
      {
        "subject": "Mathematics",
        "total_marks": "100",
        "obtained_marks": "95",
        "grade": "A+"
      },
      {
        "subject": "Physical Science",
        "total_marks": "100",
        "obtained_marks": "92",
        "grade": "A+"
      },
      {
        "subject": "Life Science",
        "total_marks": "100",
        "obtained_marks": "89",
        "grade": "A"
      },
      {
        "subject": "History",
        "total_marks": "100",
        "obtained_marks": "85",
        "grade": "A"
      },
      {
        "subject": "Geography",
        "total_marks": "100",
        "obtained_marks": "87",
        "grade": "A"
      },
      {
        "subject": "Opt. Elective",
        "total_marks": "100",
        "obtained_marks": "93",
        "grade": "A+"
      }
    ],
    "grand_total": {
      "total_marks": "700",
      "obtained_marks": "619"
    },
    "overall_grade": "A+",
    "remarks": "PASS"
  }
}
```

---

### ❌ Error Response

If invalid data is provided, the API will return an error response. For example:

```json
{
  "status": "error",
  "message": "Invalid Roll Number or DOB"
}
```

---

## 💡 Use Cases

WBBSE MadhyamikResultsAPI is versatile and can be used in various scenarios, including but not limited to:

- **Educational Platforms**: Embed result-checking functionality on websites for students.
- **Mobile Apps**: Allow students and parents to access results instantly on their devices.
- **School Management Systems**: Automate result retrieval for school administrative processes.
- **Chatbots and Telegram Bots**: Enhance bots with result-checking capabilities for quick interactions.
- **Bulk Result Automation**: Process large datasets for educational institutions with ease.

---

## 🧪 Testing with `cURL`

You can test the API using the following `cURL` command:

```bash
curl "https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=810149A1519&dob=2004-09-13"
```

---

## 📄 License

This API is free for **educational** and **non-commercial** use. If you require commercial licensing or wish to integrate it into bulk-result automation systems, please contact us for further details.

---

## 📬 Contact & Support

If you need assistance or have questions about integration, feel free to reach out to us:

- 📧 Email: [info@amitdas.site](mailto:info@amitdas.site)
- 🌐 Website: [www.amitdas.site](http://www.amitdas.site)

---

## 📌 Disclaimer

This API is intended solely for **informational** and **academic** purposes. Before deploying it in production environments, ensure compliance with applicable data privacy laws and regulations.

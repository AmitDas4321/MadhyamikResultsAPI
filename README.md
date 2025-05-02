# 📘 MadhyamikResultsAPI

**MadhyamikResultsAPI** is a blazing-fast, developer-friendly, and publicly accessible RESTful API to fetch the official results of the **West Bengal Board of Secondary Education (WBBSE)** Madhyamik (Class 10) examination for the year 2025. It provides structured JSON responses using just the student's Roll Number and Date of Birth, making it the perfect solution for educational platforms, mobile apps, dashboards, and automation scripts.

---

## 🔍 What is MadhyamikResultsAPI?

MadhyamikResultsAPI bridges the gap between result data and developers by offering a streamlined, real-time API service. Whether you're building school dashboards, student apps, or institutional automation systems, this API ensures seamless integration with accurate data delivery.

---

## 🌐 Base Endpoint

```
https://api.linkpc.net/WBBSE/Madhyamik-Results/
```

---

## ⚙️ How It Works

1. The client sends a **GET request** to the API with the following query parameters:
   - `roll_no` — The student's official roll number.
   - `dob` — The student's date of birth in `YYYY-MM-DD` format.
2. The API validates the inputs and fetches the result data.
3. A structured JSON response, containing the student's results, is returned.
4. If the input data is invalid, a clear error message is sent back.

---

## 🛠️ How to Use

### 🔗 Example API Request

```
GET https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=601382N0010&dob=2008-08-14
```

> Replace `roll_no` and `dob` with the actual student data.

### ✅ Query Parameters

| Parameter | Type   | Required | Description                                 |
|-----------|--------|----------|---------------------------------------------|
| `roll_no` | string | Yes      | The student's Roll Number (e.g., 601382N0010)   |
| `dob`     | string | Yes      | The student's Date of Birth (format: YYYY-MM-DD) |

---

## 📤 API Responses

### ✅ Successful Response

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
      ...
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
```

### ❌ Error Response

```json
{
  "status": "error",
  "message": "Invalid Roll Number or DOB"
}
```

---

## 💡 Use Cases

Here are some practical scenarios where MadhyamikResultsAPI shines:

- **Educational Platforms**: Integration into websites for result-checking.
- **Mobile Apps**: Allow students and parents to check results instantly.
- **School Management Systems**: Automate result retrieval for administrative purposes.
- **Chatbots and Telegram Bots**: Add result-fetching functionality to interactive bots.
- **Bulk Result Processing**: Handle large datasets for institutional automation.

---

## 🧪 Testing with `cURL`

You can test the API directly using the following `cURL` command:

```bash
curl "https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=601382N0010&dob=2008-08-14"
```

---

## 📄 License

This API is free for **educational** and **non-commercial** use. For commercial licensing or bulk integrations, please get in touch with us.

---

## 📬 Contact & Support

If you have questions or need help with integration, feel free to reach out:

- 📧 Email: [support@linkpc.net](mailto:support@linkpc.net)
- 🌐 Website: [https://linkpc.net](https://linkpc.net)

---

## 📌 Disclaimer

This API is intended for **informational** and **academic** purposes only. Ensure compliance with applicable data privacy laws and legal regulations before deploying it in production environments.

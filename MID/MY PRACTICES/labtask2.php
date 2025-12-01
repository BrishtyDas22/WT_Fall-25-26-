<!DOCTYPE html>
<html>
<head>
    <title>University Admission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f6ff;
            padding: 20px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            width: 600px;
            margin: auto;
            box-shadow: 0px 0px 10px #ccc;
        }
        fieldset {
            margin-bottom: 20px;
            border: 1px solid #2edd21ff;
            padding: 15px;
        }
        legend {
            font-weight: bold;
            color: #5c0066ff;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            padding: 8px;
            width: 95%;
            margin-top: 5px;
        }
        .btn-group {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <form>
        <h2 style="text-align:center; color:#003366;">University Online Admission Form</h2>

        <!-- PERSONAL INFORMATION -->
        <fieldset>
            <legend>Personal Information</legend>

            <label>Full Name:</label>
            <input type="text" name="fullname" required maxlength="40">

            <label>Email Address:</label>
            <input type="email" name="email" required>

            <label>Date of Birth:</label>
            <input type="date" name="dob" required>

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
        </fieldset>

        <!-- ACADEMIC INFORMATION -->
        <fieldset>
            <legend>Academic Information</legend>

            <label>Highest Qualification:</label>
            <input type="text" name="qualification" required maxlength="30">

            <label>Previous School/College:</label>
            <input type="text" name="institution" maxlength="40">

            <label>Preferred Department:</label>
            <select name="department" required>
                <option value="">-- Select Department --</option>
                <option value="CSE">Computer Science & Engineering</option>
                <option value="EEE">Electrical & Electronic Engineering</option>
                <option value="BBA">Bachelor of Business Administration</option>
                <option value="ENG">English</option>
                <option value="LAW">Law</option>
            </select>

            <label>Interests:</label>
            <input type="checkbox" name="interest" value="Sports"> Sports
            <input type="checkbox" name="interest" value="Programming"> Programming
            <input type="checkbox" name="interest" value="Music"> Music
            <input type="checkbox" name="interest" value="Reading"> Reading
        </fieldset>

        <!-- DOCUMENT UPLOAD -->
        <fieldset>
            <legend>Document Submission</legend>

            <label>Upload Photo:</label>
            <input type="file" name="photo" required>

            <label>Upload Transcript:</label>
            <input type="file" name="transcript">
        </fieldset>

        <!-- SUBMIT BUTTONS -->
        <div class="btn-group">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>

    </form>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge a Complain</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        .registration-form {
            background-color: #f5f9fc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .form-title {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.2s ease-in-out;
        }

        .form-control:focus {
            border-color: #3498db;
            outline: none;
        }

        .btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h2 class="form-title">Complaint Registration</h2>
            <form action="process_complain.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="work_needed" class="label">Work Needed:</label>
                    <select class="form-control" id="work_needed" name="work_needed" required>
                        <option value="">Select Work Needed</option>
                        <option value="Plumbing">Plumbing</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Maintenance">Maintenance</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="details" class="label">Details:</label>
                    <textarea class="form-control" id="details" name="details" required></textarea>
                </div>

                <div class="form-group">
                    <label for="attachment" class="label">Attachment:</label>
                    <input type="file" class="form-control" id="attachment" name="attachment" accept="image/*, .pdf" required>
                </div>

                <div class="form-group">
                    <label for="priority" class="label">Priority:</label>
                    <select class="form-control" id="priority" name="priority" required>
                        <option value="">Select Priority</option>
                        <option value="Urgent">Urgent</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
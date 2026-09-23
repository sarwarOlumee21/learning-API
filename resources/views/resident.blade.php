<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Form</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }

        .form-wrapper {
            width: 100%;
            max-width: 650px;
        }

        .form-card {
            background: #ffffff;
            border: none;
            border-radius: 16px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .form-title {
            color: #087a4b;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .form-description {
            color: #6c757d;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #343a40;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            min-height: 48px;
            border: 1px solid #dfe5e2;
            border-radius: 9px;
            padding: 10px 14px;
            transition: all 0.2s ease;
        }

        textarea.form-control {
            min-height: 130px;
            resize: vertical;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #087a4b;
            box-shadow: 0 0 0 0.2rem rgba(8, 122, 75, 0.12);
        }

        .submit-btn {
            background-color: #087a4b;
            border: none;
            color: #ffffff;
            min-height: 48px;
            border-radius: 9px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .submit-btn:hover {
            background-color: #06643e;
            color: #ffffff;
        }

        .required {
            color: #dc3545;
        }

        @media (max-width: 576px) {
            .form-card {
                padding: 25px 20px;
            }

            .form-title {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>


    <div class="form-wrapper">
<div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @else
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>
        <div class="form-card">

            <!-- Header -->
            <div class="text-center">
                <h1 class="form-title">Contact Us</h1>

                <p class="form-description">
                    Please fill out the form below and we will get back to you soon.
                </p>
            </div>

            <!-- Form -->
            <form action="{{ route('store') }}" method="POST">
                @csrf

                <!-- Name + Phone -->
                <div class="row g-3 mb-3">

                    <div class="col-md-6">
                        <label for="firstName" class="form-label">
                            First Name
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="firstName"
                            name="name"
                            placeholder="Enter your first name"
                            required
                        >
                    </div>

                    <div class="col-md-6">
                        <label for="lastName" class="form-label">
                            Last Name
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="lastName"
                            name="LastName"
                            placeholder="Enter your last name"
                            required
                        >
                    </div>

                </div>

                <!-- Email + Phone -->
                <div class="row g-3 mb-3">

                    <div class="col-md-6">
                        <label for="email" class="form-label">
                            Email
                            <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="example@email.com"
                            required
                        >
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            class="form-control"
                            id="phone"
                            name="phone"
                            placeholder="+93 700 000 000"
                        >
                    </div>

                </div>



                <!-- Message -->
                <div class="mb-4">

                    <label for="message" class="form-label">
                        Message
                        <span class="required">*</span>
                    </label>

                    <textarea
                        class="form-control"
                        id="message"
                        name="note"
                        placeholder="Write your message here..."
                        required
                    ></textarea>

                </div>

                <!-- Submit -->
                <div class="d-grid">

                    <button
                        type="submit"
                        class="btn submit-btn"
                    >
                        Send Message
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>

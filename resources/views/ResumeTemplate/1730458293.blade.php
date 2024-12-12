<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.10/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            justify-content: flex-start;
            align-items: center;
            background-color: #f5f5f5;
            font-family: 'Open Sans', Arial, sans-serif;
        }

        .content {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            width: 800px;
            max-width: 1200px;
            padding: 20px;
            box-sizing: border-box;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .inner {
            width: 100%;
            color: #333;
            padding: 15px;
            padding-top: 0px;
            background-color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 5px 0;
        }

        .bar {
            height: 15px;
            width: 100%;
            background-color: #2c3e50;
        }

        .header p {
            font-size: 17px;
            text-transform: uppercase;
            color: #2c3e50;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin-top: 9px;
            margin-left: 3px;
            margin-bottom: 1px;
            font-weight: 900;
        }

        .contact-info {
            text-align: right;
            color: #555;
        }

        .contact-info p {
            font-size: 12px;
            font-weight: 400;
            margin: 2px 0;
        }

        hr {
            height: 2px;
            background-color: #e0e0e0;
            border: none;
            margin: 15px 0;
        }

        .container-wrapper {
            display: flex;
            width: 100%;
            margin-top: 10px;
            gap: 20px;
        }

        .container1, .container2 {
            flex: 1;
            padding: 0;
        }

        .summary {
            width: 100%;
            margin-bottom: 20px;
        }

        .heading {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .heading p {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
            color: #2c3e50;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            text-transform: uppercase;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 3px;
        }

        .details p {
            margin: 0;
            font-size: 13px;
            color: #444;
            line-height: 1.5;
            text-align: justify;
        }

        .details p[style*="font-weight: 600"] {
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .details ul {
            padding-left: 20px;
            margin: 5px 0;
        }

        .details ul li {
            color: #444;
            font-size: 12px;
            margin-bottom: 4px;
        }

        .firstSkill, .secondSkill {
            background-color: #f8f9fa;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 10px;
        }

        .download-btn {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            padding-bottom: 20px;
        }

        .download-btn button {
            background-color: #2c3e50;
            border: none;
            color: white;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        .download-btn button:hover {
            background-color: #34495e;
        }

        /* Professional Summary specific styling */
        .summary .details p {
            font-size: 13px;
            line-height: 1.6;
            color: #555;
        }

        /* Education section specific styling */
        .details p[style*="font-weight: 600"] {
            font-size: 14px;
            color: #2c3e50;
        }

        /* Work Experience specific styling */
        .container2 .details i {
            color: #666;
        }

        /* Awards section specific styling */
        .summary:last-child .details p {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="template-content" contenteditable="true">
            <div class="inner">
                <div class="bar"></div>
                <div class="header">
                    <div style="margin-left: 20px;">
                        <p style="font-size:28px">Shaikh Sohel</p>
                        <div><p style="font-size: 12px; font-weight: 400; text-transform: none;">LinkedIn: http://lockdown.com/</p></div>
                        <div><p style="font-size: 12px; font-weight: 400; text-transform: none;">Github: http://lockdown.com/</p></div>
                    </div>
                    <div class="contact-info" style="margin-right: 20px;">
                        <p style="text-transform: none; font-size: 13px;">Email: your_email@example.com</p>
                        <p style="text-transform: none; font-size: 13px;">Contact: +1234567890</p>
                        <p style="text-transform: none; font-size: 13px;">Location: City, Country</p>
                    </div>
                </div>
                <hr />

                <!-- Rest of your existing HTML structure remains the same -->
                <!-- Just keep all the divs and content as they were -->
                <!-- The styling will automatically apply to them -->

            </div>
        </div>
    </div>

    <div class="download-btn">
        <button id="download-pdf">Download PDF</button>
    </div>

    <!-- Keep your existing scripts -->
    <script>
        document.getElementById('download-pdf').addEventListener('click', function() {
            const element = document.querySelector('.template-content');
            const options = {
                margin: 10,
                filename: 'resume.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { dpi: 192, scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };
            html2pdf().from(element).set(options).save();
        });
    </script>

    <script>
        const editableContent = document.querySelector('.template-content');

        editableContent.addEventListener('input', function() {
            localStorage.setItem('editableContent', editableContent.innerHTML);
        });

        window.onload = function() {
            const savedContent = localStorage.getItem('editableContent');
            if (savedContent) {
                editableContent.innerHTML = savedContent;
            }
        };
    </script>
</body>
</html>
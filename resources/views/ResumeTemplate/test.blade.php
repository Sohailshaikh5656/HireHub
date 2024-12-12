<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    
        <!-- ... other head elements ... -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
        }

        .resume-container {
            width: 1000px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
        }

        .left-section {
            width: 40%;
            background: #2c3e50;
            color: white;
            padding: 30px;
        }

        .right-section {
            width: 60%;
            padding: 30px;
            background: white;
        }

        .section {
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
        }

        .education-item, .experience-item {
            margin-bottom: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .left-section .section-title {
            color: white;
            border-bottom-color: rgba(255,255,255,0.2);
        }

        .name {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .title {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 20px;
        }

        .contact-info {
            font-size: 14px;
            line-height: 1.6;
        }

        .download-btn {
            text-align: center;
            margin-top: 20px;
        }

        .download-btn button {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        @media print {
            body {
                padding: 0;
                background: white;
            }
            .resume-container {
                box-shadow: none;
            }
            .download-btn {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="resume-container">
        <div class="left-section">
            <div class="section">
                <div class="name" contenteditable="true">Shaikh Tosif</div>
                <div class="title" contenteditable="true">Software Developer</div>
                <div class="contact-info" contenteditable="true">
                    Email: your_email@example.com<br>
                    Phone: +1234567890<br>
                    Location: City, Country<br>
                    LinkedIn: /in/profile<br>
                    Github: /username
                </div>
            </div>

            <div class="section">
                <div class="section-title" contenteditable="true">Education</div>
                <div class="education-item" contenteditable="true">
                    <div>Master of Computer Application</div>
                    <div>XJ University • 2025</div>
                    <div>Percentage: 72%</div>
                </div>
                <div class="education-item" contenteditable="true">
                    <div>Master of Computer Application</div>
                    <div>XJ University • 2025</div>
                    <div>Percentage: 72%</div>
                </div>
            </div>

            <div class="section">
                <div class="section-title" contenteditable="true">Skills</div>
                <div class="skills-list" contenteditable="true">
                    • JavaScript<br>
                    • React.js<br>
                    • Node.js<br>
                    • PHP<br>
                    • Laravel<br>
                    • MySQL
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="section">
                <div class="section-title" contenteditable="true">About</div>
                <div contenteditable="true">A right-hand, top-order batsman known for his discipline and level-headed attitude. Babar Azam laid claim to a long-term spot in Pakistan's batting line-up with a strong performance in 2019, making three consecutive ODI hundreds against West Indies in the UAE, and a 90 in his third Test, in Hamilton. He was 22 years old at the time.</div>
            </div>

            <div class="section">
                <div class="section-title" contenteditable="true">Experience</div>
                <div class="experience-item" contenteditable="true">
                    <div class="experience-title">Senior Developer</div>
                    <div>Tech Company • 2020 - Present</div>
                    <div>• Led development of key features<br>
                    • Managed team of 5 junior developers<br>
                    • Implemented CI/CD pipelines</div>
                </div>
                <div class="experience-item" contenteditable="true">
                    <div class="experience-title">Full Stack Developer</div>
                    <div>StartUp Inc • 2018 - 2020</div>
                    <div>• Developed web applications<br>
                    • Collaborated with design team<br>
                    • Optimized performance</div>
                </div>
            </div>

            <div class="section">
                <div class="section-title" contenteditable="true">Projects</div>
                <div class="experience-item" contenteditable="true">
                    <div class="experience-title">E-Commerce Platform</div>
                    <div>• Built full-featured platform<br>
                    • Implemented payment gateway<br>
                    • Developed admin dashboard</div>
                </div>
            </div>
        </div>
    </div>

    <div class="download-btn">
        <button onclick="generatePDF()">Download PDF</button>
    </div>

    <script>
        // Add window.jsPDF declaration
        window.jsPDF = window.jspdf.jsPDF;
    
        function generatePDF() {
            const element = document.querySelector('.resume-container');
            const options = {
                margin: 10,
                filename: 'resume.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };
            
            // Use promise chain for better error handling
            html2pdf().set(options).from(element).save().catch(error => {
                console.error('Error generating PDF:', error);
            });
        }
    
        // Rest of your script remains the same
        document.querySelectorAll('[contenteditable="true"]').forEach(element => {
            element.addEventListener('input', function() {
                localStorage.setItem('resumeContent', document.querySelector('.resume-container').innerHTML);
            });
        });
    
        window.onload = function() {
            const savedContent = localStorage.getItem('resumeContent');
            if (savedContent) {
                document.querySelector('.resume-container').innerHTML = savedContent;
            }
        };
    </script>
</body>
</html>
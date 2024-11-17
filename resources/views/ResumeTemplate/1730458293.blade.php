
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resume</title>
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
		justify-content: flex-start; /* Keeps the content at the top */
		align-items: center; /* Center the content horizontally */
	}

	.content {
		margin-top: 30px;
		display: flex;
		justify-content: center; /* Center content horizontally within content */
		width: 700px;
		max-width: 1200px; /* Optional: adjust this value as needed */
		padding: 20px;
		box-sizing: border-box;
		text-align: center;
		box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
                -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                0px 12px 10px -10px rgba(0, 0, 0, 0.5);
	}

	.inner {
		width: 100%; /* Set width to 100% so it stretches to the full container */
		color: antiquewhite;
		border: 1px solid black;
		padding: 15px;
		padding-top: 0px;
	}
		.header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			width: 100%;
			padding: 5px 0;
			
		}
		.bar {
			height: 20px;
			width: 100%;
			background-color: aqua;
		}
		.header p {
			font-size: 17px;
			text-transform: uppercase;
			color: black;
			font-family: 'Courier New', Courier, monospace;
			margin-top: 9px;
			margin-left: 3px;
			margin-bottom: 1px;
			font-weight: 900;
		}
		.contact-info {
			text-align: right;
			color: black;
		}
		.contact-info p {
			font-size: 8px;
			font-weight: 100;
			margin: 2px 0;
		}
		hr {
			height: 2px;
			background-color: darkgray;
			border: none;
			margin: 10px 0;
		}
		.container-wrapper {
			display: flex;
			width: 100%;
			margin-top: 10px;
			/* Remove margin to prevent gaps */
		}
		.container1, .container2 {
			flex: 1; /* Allow both containers to grow equally */
			padding: 0; /* Remove padding for tighter layout */
			/* Remove margin for a seamless join */
		}
		.summary {
			width: 100%;
		}
		.heading {
			display: flex;
			align-items: center;
		}
		.heading p {
			margin: 0;
			font-size: 15px;
			font-weight: bold;
			color: black;
			font-family: Arial, sans-serif;
			text-transform: uppercase;
			margin-bottom: 3px;
		}
		.details p {
			margin: 0;
			font-size: 11px;
			color: black;
			font-family: 'Times New Roman', Times, serif;
			text-align: justify;
			padding: 3px;
		}

		

		/* Style the download button and position it at the bottom */
		.download-btn {
			width: 100%;
			text-align: center;
			margin-top: 20px;
			padding-bottom: 20px;
		}

		/* Optional: Style the button appearance */
		.download-btn button {
			background-color: #A2D25C;
			border: none;
			color: white;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 5px;
		}
		p{
			font-size: 13px;
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
						<div><p style="font-size: 12px; font-weight: 100; text-transform: none;">Linked In : http://lockdown.com/</p></div>
						<div><p style="font-size: 12px; font-weight: 100; text-transform: none;">Github : http://lockdown.com/</p></div>
					</div>
					<div class="contact-info" style="margin-right: 20px;">
						<p style="text-transform: none; font-size: 13px;">Email: your_email@example.com</p>
						<p style="text-transform: none; font-size: 13px;">Contact: +1234567890</p>
						<p style="text-transform: none; font-size: 13px;">Location: City, Country</p>
					</div>
				</div>
				<hr />

				<div class="container-wrapper">
					<div class="container1" ;style="padding:10px;">
						<div class="summary">
							<div class="heading" style="margin-top:10px;"><p>Professional Summary : </p><div class="samllbar"></div></div>
							<div class="details"><p>A right-hand, top-order batsman known for his discipline and level-headed attitude, Babar Azam laid claim to a long-term spot in Pakistan's batting line-up with a strong performance in 2016, making three consecutive ODI hundreds against West Indies in the UAE, and a 90 in his third Test, in Hamilton. He was 22 years old at the time.</p></div>
							<hr style="height: 2px; background-color: darkgray; border: none;"/>
						</div>

						<div class="summary">
							<div class="heading"><p>Education : </p><div class="samllbar"></div></div>
							<div class="details"><p style="font-size: 12px; font-weight: 100;">Included your Degree, School Name , Pervcentage etc.</p></div>
							<div class="details"><p style="font-size: 13px; font-weight: 600;">Master of Computer Application - &nbsp;&nbsp;&nbsp;(Percentage : 72%)</p></div>
							<div class="details"><p style="font-size: 13px; font-weight: 200; margin-top: -4px;">LJ University - &nbsp;&nbsp;&nbsp;(2025)</p></div>

							<div class="details"><p style="font-size: 13px; font-weight: 600;">Master of Computer Application - &nbsp;&nbsp;&nbsp;(Percentage : 72%)</p></div>
							<div class="details"><p style="font-size: 12px; font-weight: 200; margin-top: -4px;">LJ University - &nbsp;&nbsp;&nbsp;(2025)</p></div>

							<div class="details"><p style="font-size: 13px; font-weight: 600;">Master of Computer Application - &nbsp;&nbsp;&nbsp;(Percentage : 72%)</p></div>
							<div class="details"><p style="font-size: 12px; font-weight: 200; margin-top: -4px;">LJ University - &nbsp;&nbsp;&nbsp;(2025)</p></div>
							<hr style="height: 2px; background-color: darkgray; border: none;"/>
						</div>


						<div class="summary">
							<div class="heading"><p>Projects : </p><div class="samllbar"></div></div>
							<div class="details"><p style="font-size: 12px; font-weight: 100; display: inline">Included your Degree, School Name , Pervcentage etc.</p></div>
							<div class="details"><p style="font-size: 13px; font-weight: 600;">E-commerce Platform - &nbsp;&nbsp;&nbsp; <i>Laravel</i></p></div>
							<div class="details"><p style="font-size: 12px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>

							<div class="details"><p style="font-size: 13px; font-weight: 600;">E-commerce Platform - &nbsp;&nbsp;&nbsp; <i>Laravel</i></p></div>
							<div class="details"><p style="font-size: 12px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>

							<div class="details"><p style="font-size: 13px; font-weight: 600;">E-commerce Platform - &nbsp;&nbsp;&nbsp; <i>Laravel</i></p></div>
							<div class="details"><p style="font-size: 12px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>
							<hr style="height: 2px; background-color: darkgray; border: none; margin-top: 10px;"/>
						</div>

						<div class="summary">
							<div class="heading"><p>Skill  : </p><div class="samllbar"></div></div>
							<div class="details" style="display: flex;">
								<div class="firstSkill" style="font-size: 10px; color: black; margin-left: px;"> <ul><li>Php</li></ul> </div>
								<div class="secondSkill" style="font-size: 10px;  color: black;  margin-left: 15px;"> <ul><li>Laravel</li></ul> </div>\
								<div class="secondSkill" style="font-size: 10px;  color: black;  margin-left: 15px;"> <ul><li>Python</li></ul> </div>
							</div>
							<hr style="height: 2px; background-color: darkgray; border: none; margin-top: 10px;"/>
						</div>
					</div>
					<div class="container2" style="padding:10px;">
						<div class="summary">
							<div class="heading"><p>Work Experiances : </p><div class="samllbar"></div></div>
							<div class="details"><p style="font-size: 13px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 12px; font-weight: 400;">CG Road, Ahmedabad</i></p></div>
							<div class="details"><p style="font-size: 13px; font-weight: 500; font-family: Arial, Helvetica, sans-serif;">09/02/2024</p></div>
							<div class="details"><p style="font-size: 13px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div><br />

							<div class="details"><p style="font-size: 13px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 12px; font-weight: 400;">CG Road, Ahmedabad</i></p></div>
							<div class="details"><p style="font-size: 13px; font-weight: 500; font-family: Arial, Helvetica, sans-serif;">09/02/2024</p></div>
							<div class="details"><p style="font-size: 13px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div><br />

							<hr style="height: 2px; background-color: darkgray; border: none; margin-top: 10px;"/>
						</div>

						<div class="summary">
							<div class="heading"><p>Award And Certification : </p><div class="samllbar"></div></div><br />
							<div class="details"><p style="font-size: 13px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 12px; font-weight: 400;">2023</i></p></div>
							<div class="details"><p style="font-size: 14px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div><br />
							<div class="details"><p style="font-size: 14px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 12px; font-weight: 400;">2023</i></p></div>
							<div class="details"><p style="font-size: 14px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div><br />
							<div class="details"><p style="font-size: 13px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 12px; font-weight: 400;">2023</i></p></div>
							<div class="details"><p style="font-size: 14px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>
							
							<hr style="height: 2px; background-color: darkgray; border: none; margin-top: 10px;"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div style="display: block"><!--// doc -->

	<div class="download-btn">
		<button id="download-pdf">Download PDF</button>
    </div>
</div>
<script>
	document.getElementById('download-pdf').addEventListener('click', function() {
		// Capture the content of the template-content class
		const element = document.querySelector('.template-content');
		
		// Use html2pdf.js to generate the PDF
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
    // Optional: Add functionality to allow saving the content (if needed)
    // For example, saving the edited content in localStorage
    const editableContent = document.querySelector('.template-content');

    editableContent.addEventListener('input', function() {
      localStorage.setItem('editableContent', editableContent.innerHTML);
    });

    // Load saved content from localStorage if it exists
    window.onload = function() {
      const savedContent = localStorage.getItem('editableContent');
      if (savedContent) {
        editableContent.innerHTML = savedContent;
      }
    };
  </script>
	
</body>
</html>
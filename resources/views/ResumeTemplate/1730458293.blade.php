
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resume</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.10/jspdf.plugin.autotable.min.js"></script>
	
	<style>
		body {
			display: flex;
			justify-content: center;
		}
		.inner {
			width: 600px;
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
	</style>
	
</head>
<body>
	<div class="template-content">
		<div class="inner">
			<div class="bar"></div>
			<div class="header">
				
				<div style="margin-left: 20px;">
					<p>Shaikh Sohel</p>
					<div><p style="font-size: 7px; font-weight: 100; text-transform: none;">Linked In : http://lockdown.com/</p></div>
					<div><p style="font-size: 7px; font-weight: 100; text-transform: none;">Github : http://lockdown.com/</p></div>
				</div>
				<div class="contact-info" style="margin-right: 20px;">
					<p style="text-transform: none;">Email: your_email@example.com</p>
					<p style="text-transform: none;">Contact: +1234567890</p>
					<p style="text-transform: none;">Location: City, Country</p>
				</div>
			</div>
			<hr />

			<div class="container-wrapper">
				<div class="container1">
					<div class="summary">
						<div class="heading"><p>Professional Summary : </p><div class="samllbar"></div></div>
						<div class="details"><p>A right-hand, top-order batsman known for his discipline and level-headed attitude, Babar Azam laid claim to a long-term spot in Pakistan's batting line-up with a strong performance in 2016, making three consecutive ODI hundreds against West Indies in the UAE, and a 90 in his third Test, in Hamilton. He was 22 years old at the time.</p></div>
						<hr style="height: 2px; background-color: darkgray; border: none;"/>
					</div>

					<div class="summary">
						<div class="heading"><p>Education : </p><div class="samllbar"></div></div>
						<div class="details"><p style="font-size: 9px; font-weight: 100;">Included your Degree, School Name , Pervcentage etc.</p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 600;">Master of Computer Application - &nbsp;&nbsp;&nbsp;(Percentage : 72%)</p></div>
						<div class="details"><p style="font-size: 9px; font-weight: 200; margin-top: -4px;">LJ University - &nbsp;&nbsp;&nbsp;(2025)</p></div>

						<div class="details"><p style="font-size: 11px; font-weight: 600;">Master of Computer Application - &nbsp;&nbsp;&nbsp;(Percentage : 72%)</p></div>
						<div class="details"><p style="font-size: 9px; font-weight: 200; margin-top: -4px;">LJ University - &nbsp;&nbsp;&nbsp;(2025)</p></div>

						<div class="details"><p style="font-size: 11px; font-weight: 600;">Master of Computer Application - &nbsp;&nbsp;&nbsp;(Percentage : 72%)</p></div>
						<div class="details"><p style="font-size: 9px; font-weight: 200; margin-top: -4px;">LJ University - &nbsp;&nbsp;&nbsp;(2025)</p></div>
						<hr style="height: 2px; background-color: darkgray; border: none;"/>
					</div>


					<div class="summary">
						<div class="heading"><p>Projects : </p><div class="samllbar"></div></div>
						<div class="details"><p style="font-size: 9px; font-weight: 100; display: inline">Included your Degree, School Name , Pervcentage etc.</p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 600;">E-commerce Platform - &nbsp;&nbsp;&nbsp; <i>Laravel</i></p></div>
						<div class="details"><p style="font-size: 10px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>

						<div class="details"><p style="font-size: 11px; font-weight: 600;">E-commerce Platform - &nbsp;&nbsp;&nbsp; <i>Laravel</i></p></div>
						<div class="details"><p style="font-size: 10px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>

						<div class="details"><p style="font-size: 11px; font-weight: 600;">E-commerce Platform - &nbsp;&nbsp;&nbsp; <i>Laravel</i></p></div>
						<div class="details"><p style="font-size: 10px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>
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
				<div class="container2">
					<div class="summary">
						<div class="heading"><p>Work Experiances : </p><div class="samllbar"></div></div>
						<div class="details"><p style="font-size: 9px; font-weight: 100; display: inline">Included your Degree, School Name , Pervcentage etc.</p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 8px; font-weight: 400;">CG Road, Ahmedabad</i></p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 500; font-family: Arial, Helvetica, sans-serif;">09/02/2024</p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>

						<div class="details"><p style="font-size: 11px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 8px; font-weight: 400;">CG Road, Ahmedabad</i></p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 500; font-family: Arial, Helvetica, sans-serif;">09/02/2024</p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>

						<hr style="height: 2px; background-color: darkgray; border: none; margin-top: 10px;"/>
					</div>

					<div class="summary">
						<div class="heading"><p>Award And Certification : </p><div class="samllbar"></div></div>
						<div class="details"><p style="font-size: 9px; font-weight: 100; display: inline">Included your Degree, School Name , Pervcentage etc.</p></div>
						<div class="details"><p style="font-size: 13px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 8px; font-weight: 400;">2023</i></p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 8px; font-weight: 400;">2023</i></p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>
						<div class="details"><p style="font-size: 10px; font-weight: 600;">Create Solution - &nbsp;&nbsp;&nbsp; <i style="font-size: 8px; font-weight: 400;">2023</i></p></div>
						<div class="details"><p style="font-size: 11px; font-weight: 200; margin-top: -4px;">Developed a multi-seller e-commerce platform (RefereshZone) for soft drinks using Laravel, enabling companies to create accounts and manage sales.</p></div>
						
						<hr style="height: 2px; background-color: darkgray; border: none; margin-top: 10px;"/>
					</div>
				</div>
			</div>
		</div>
	</div>

<div style="display: block"><!--// doc -->

	<button class="btn btn-danger" onclick="downloadPDF()">Download as PDF</button>
</div>
<script>
	
		function downloadPDF() {
			// Get HTML and CSS content
			const content = document.querySelector('.inner').outerHTML; // Changed to querySelector
			const css = document.querySelector('style').innerHTML;

			fetch('/user/pdf/download', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				body: JSON.stringify({ content, css })
			})
			.then(response => {
				if (!response.ok) throw new Error('Failed to generate PDF');
				return response.blob();
			})
			.then(blob => {
				// Create a link element for downloading the PDF
				const url = window.URL.createObjectURL(blob);
				const a = document.createElement('a');
				a.href = url;
				a.download = 'resume.pdf';
				document.body.appendChild(a);
				a.click();
				a.remove();
			})
			.catch(error => console.error('Error:', error));
		}


	</script>
	
</body>
</html>
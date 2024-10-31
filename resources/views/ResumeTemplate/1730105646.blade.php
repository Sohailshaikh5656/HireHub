<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>Jonathan Doe | Web Designer, Director | name@yourdomain.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<!-- <link rel="stylesheet" type="text/css" href="resume.css" media="all" /> -->
	<style>
		        body {
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default margins */
            padding: 20px; /* Control the padding */
        }

        @media print {
            body {
                margin: 0; /* Remove margins for print */
                padding: 0; /* Remove padding for print */
                font-size: 12px; /* Set smaller font size for print */
            }
            #inner {
                padding: 5px; /* Reduce inner padding */
                border: none; /* Remove border if not needed */
            }
        }

        #inner {
            padding: 10px 20px; /* Adjust padding for screen */
            margin: auto; /* Center content */
            background: #f5f5f5; 
            border: solid #666; 
            border-width: 8px 0 2px 0; 
        }

       
		/*
---------------------------------------------------------------------------------
	STRIPPED DOWN RESUME TEMPLATE
    html resume

    v0.9: 5/28/09

    design and code by: thingsthatarebrown.com 
                        (matt brown)
---------------------------------------------------------------------------------
*/


.msg { padding: 5px; background: #222; position: relative; }
.msg h1 { color: #fff;  }
.msg a { margin-left: 10px; background: #408814; color: white; padding: 4px 8px; text-decoration: none; }
.msg a:hover { background: #266400; }

/* //-- yui-grids style overrides -- */
.yui-gf { margin-bottom: 1em; padding-bottom: 1em; border-bottom: 1px solid #ccc; }

/* //-- header, body, footer -- */
#hd { margin: 1.5em 0 1.5em 0; padding-bottom: 1.5em; border-bottom: 1px solid #ccc }
#hd h2 { text-transform: uppercase; letter-spacing: 2px; }
#bd, #ft { margin-bottom: 0.5em; }

/* //-- footer -- */
#ft { padding: 1em 0 2em 0; font-size: 92%; border-top: 1px solid #ccc; text-align: center; }
#ft p { margin-bottom: 0; text-align: center;   }

/* //-- core typography and style -- */

p { font-size: 100%; line-height: 18px; padding-right: 3em; }
a { color: #990003 }
a:hover { text-decoration: none; }
strong { font-weight: bold; }
li { line-height: 24px; border-bottom: 1px solid #ccc; }

.contact-info { margin-top: 7px; }
.first h2 { font-style: italic; }
.last { border-bottom: 0 }


/* //-- section styles -- */

a#pdf { display: block; float: left; background: #666; color: white; padding: 6px 50px 6px 12px; margin-bottom: 6px; text-decoration: none;  }
a#pdf:hover { background: #222; }

.job { position: relative; margin-bottom: 1em; padding-bottom: 1em; border-bottom: 1px solid #ccc; }
.job h4 { position: absolute; top: 0.35em; right: 0 }
.job p { margin: 0.75em 0 3em 0; }

.last { border: none; }
.skills-list {  }
.skills-list ul { margin: 0; }
.skills-list li { margin: 3px 0; padding: 3px 0; }
.skills-list li span { font-size: 152%; display: block; margin-bottom: -2px; padding: 0 }
.talent { width: 32%; float: left }
.talent h2 { margin-bottom: 6px; }

#srt-ttab { margin-bottom: 100px; text-align: center;  }
#srt-ttab img.last { margin-top: 20px }

/* --// override to force 1/8th width grids -- */
.yui-gf .yui-u{width:77.2%;}
.yui-gf div.first{width:13.3%;}

h1{
	font-size: 18px;
}
h2{
	font-size: 16px;
}

h3{
	font-size: 14px;
}

h4{
	font-size: 12px;
}

h5{
	font-size: 11px;
}

h6{
	font-size: 10px;
}


@media print {
            body {
                margin: 0; /* Remove margins for print */
                padding: 0; /* Remove padding for print */
                font-size: 12px; /* Set smaller font size for print */
            }
           
        }

		@media print {
    @page {
        size: A4; /* Set page size to A4 */
        margin: 20mm; /* Adjust margins if necessary */
    }

    .inner {
        width: 100%; /* Use full width */
        overflow: hidden; /* Prevent overflow */
        white-space: nowrap; /* Prevent line breaks */
    }

    /* Optional: Control how page breaks happen */
    .page-break {
        page-break-before: always; /* Force a page break before this element */
    }
}


		

	</style>
	 
</head>
<body>

<div id="doc2" class="yui-t7">

	<div id="template-content" class="template" contenteditable="true" style="width: 700px">
    <div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>{{$user->first_name}}&nbsp;{{$user->last_name}}</h1>
					<h2>Web Designer, Director</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						
						<h3><a href="mailto:name@yourdomain.com">{{$user->email}}</a></h3>
						<h3>(91) {{$userProfile->contact}}</h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
							</p>
						</div>
					</div><!--// .yui-gf -->
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Personal<br>Infomation</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<b>Date of Birth : </b> {{$userProfile->DOB}}
							</p>
							<p class="enlarge">
								<b>Gender : </b> {{$userProfile->gender}}
							</p>
							<p class="enlarge">
								<b>Current Location : </b> {{$city->city_name}}, {{$state->state_name}}.
							</p>
							
						</div>
					</div>

					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						@foreach ($edu as $edu)
						<div class="yui-u">
							<h3>{{$edu->board}} - {{$edu->school_name}}</h3>
							<h3>{{strtoupper($edu->degree)}}&nbsp;-&nbsp;{{$edu->ending_year}} &mdash; <strong>Score : {{$edu->grade}}</strong> </h3><br> 
						</div>
						@endforeach
						
						
					</div>

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skill</h2>
						</div>
						<div class="yui-u">
							@for ($i = 0; $i < count($skill); $i += 3)
							<ul class="talent" style="text-transform: uppercase">
							<li>{{ $skill[$i] }}</li>
							@if ($i + 1 < count($skill))
								<li>{{ $skill[$i + 1] }}</li>
							@endif
							@if ($i + 2 < count($skill))
								<li class="last">{{ $skill[$i + 2] }}</li>
							@endif
						</ul>

						@endfor
							

							
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
							@foreach ($exp as $exp)
							<div class="job">
								<h2>{{$exp->institution_name}}</h2>
								<h3>{{$exp->post_name}}</h3>
								<h4>{{$exp->starting_year}} To {{$exp->ending_year}}</h4>
								<p>{{$exp->post_description}}</p>
							</div>
							@endforeach

							

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<!--// .yui-gf -->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Certificates &</h2>
							<h2>Awards</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
							@foreach ($certi as $certi)
							<div class="job">
								<h2>{{$certi->certificate_name}}</h2>
								<h4>{{$certi->completion_date}}</h4>
								<p>{{$certi->description}}</p>
							</div>
							@endforeach

							

						</div><!--// .yui-u -->
					</div>
					


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>{{$user->first_name}} {{$user->last_name}} &mdash; <a href="mailto:{{$user->email}}">{{$user->email}}</a> &mdash; (91) - {{$userProfile->contact}}</p>
		</div><!--// footer -->

	</div>
</div>
	<!-- // inner -->


	<div><!--// doc -->

		<button class="btn btn-danger" onclick="downloadPDF()">Download as PDF</button>
	</div>
	
	<script>
	function downloadPDF() {
    // Get HTML and CSS content
    const content = document.getElementById('inner').outerHTML;
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
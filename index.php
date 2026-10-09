<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TU Assignment Cover Page Generator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>📄</text></svg>">
</head>

<body>

    <header>
        <div class="toggle-wrap">
            <button class="theme-btn" onclick="toggleTheme()" id="themeBtn">
                <span id="themeIcon">🌙</span>
                <span class="theme-label" id="themeLabel">Night</span>
            </button>
        </div>
        <h1>TU Assignment Cover Page Generator</h1>
        <p>Tribhuvan University &mdash; Official Cover Page PDF</p>
    </header>

    <div class="wrap">
        <div class="card">

            <div class="sec">Document Type</div>
            <div class="fld">
                <label>Select document type</label>
                <div class="radios">
                    <div><input type="radio" name="dtype" id="d1" value="Assignment" checked
                            onchange="toggleDtype()"><label for="d1">Assignment</label></div>
                    <div><input type="radio" name="dtype" id="d2" value="Lab Report" onchange="toggleDtype()"><label
                            for="d2">Lab
                            Report</label></div>
                    <div><input type="radio" name="dtype" id="d3" value="Project Report" onchange="toggleDtype()"><label
                            for="d3">Project Report</label></div>
                    <div><input type="radio" name="dtype" id="d4" value="other_dtype" onchange="toggleDtype()"><label
                            for="d4">Other</label></div>
                </div>
            </div>
            <div class="fld custom-hidden" id="customDtypeBox" style="margin-top:12px;">
                <label>Specify Document Type</label>
                <input type="text" id="customDtype" placeholder="e.g. Practical Report">
            </div>

            <div class="hr"></div>
            <div class="sec">Subject</div>
            <div class="grid">
                <div class="fld">
                    <label>Select Subject</label>
                    <select id="subSel" onchange="toggleCustom()">
                        <option value="">-- Select Subject --</option>
                        <option value="Numerical Methods">Numerical Methods</option>
                        <option value="Scripting Language">Scripting Language</option>
                        <option value="Operating Systems">Operating Systems</option>
                        <option value="Database Management System">Database Management System</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="custom">Other (type below)</option>
                    </select>
                </div>
                <div class="fld custom-hidden" id="customBox">
                    <label>Custom Subject Name</label>
                    <input type="text" id="customSub" placeholder="e.g. Artificial Intelligence">
                </div>
            </div>

            <div class="hr"></div>
            <div class="sec">College Information</div>
            <div class="grid">
                <div class="fld">
                    <label>Faculty</label>
                    <select id="faculty" onchange="toggleFaculty()">
                        <option value="Faculty of Humanities and Social Sciences">Faculty of Humanities and Social
                            Sciences</option>
                        <option value="Faculty of Science and Technology">Faculty of Science and Technology</option>
                        <option value="Faculty of Management">Faculty of Management</option>
                        <option value="Faculty of Education">Faculty of Education</option>
                        <option value="Faculty of Law">Faculty of Law</option>
                        <option value="other_faculty">Other (type below)</option>
                    </select>
                </div>

                <div class="fld custom-hidden" id="customFacultyBox">
                    <label>Specify Faculty Name</label>
                    <input type="text" id="customFaculty" placeholder="e.g. Faculty of Engineering">
                </div>
                <div class="fld">
                    <label>College Name</label>
                    <input type="text" id="college" value="Mahendra Morang Adarsha Multiple College">
                </div>
                <div class="fld">
                    <label>Location</label>
                    <input type="text" id="location" value="Biratnagar Morang">
                </div>
            </div>

            <div class="hr"></div>
            <div class="sec">Submitted By (Student)</div>
            <div class="grid">
                <div class="col2" style="display:grid">
                    <div class="fld">
                        <label>Student Name</label>
                        <input type="text" id="sName" placeholder="e.g. Mukesh Kumar Majhi">
                    </div>
                    <div class="fld">
                        <label>Roll Number</label>
                        <input type="text" id="sRoll" placeholder="e.g. 37">
                    </div>
                </div>
                <div class="fld">
                    <label>Semester / Year (optional)</label>
                    <input type="text" id="sSem" placeholder="e.g. 5th Semester / 2nd Year BCA">
                </div>
            </div>

            <div class="hr"></div>
            <div class="sec">Submitted To (Teacher)</div>
            <div class="grid">
                <div class="fld">
                    <label>Teacher Name</label>
                    <input type="text" id="tName" placeholder="e.g. Guru Sharan Giri">

                </div>
                <div class="fld">
                    <label>Designation (optional)</label>
                    <input type="text" id="tDesig" placeholder="e.g. Assistant Professor">
                </div>
            </div>

            <button class="btn" onclick="makePDF()">&#8595; Generate &amp; Download PDF</button>
            <div class="toast" id="toast">&#10003; PDF downloaded successfully!</div>
            <p class="hint">PDF will be generated exactly like TU official format</p>

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
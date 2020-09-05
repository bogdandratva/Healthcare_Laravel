@extends('layouts.main')

@section('title', 'Acknowledgments, Licensing and Certification')

@section('content')

    <div class="container">
        <h1>Acknowledgments, Licensing and Certification</h1>
        <hr>

        <h3>License information</h3>
        <div class="paragraph">
            Unless otherwise stated, this code is subject to the terms of the <a href="mpl_license.txt">
                Mozilla Public License v 2.0 (MPL)</a>, a copy of which is included here for your convenience.<br>
            This code is also distributed under the terms of the <a href="#healthcare_disclaimer">Healthcare Disclaimer</a>,
            which can be found at the bottom of this page.
        </div>
        <h3>Websites</h3>
        <div class="paragraph">
            <a href="http://librehealth.io/">LibreHealth EHR</a> - The LibreHealth EHR website: <a href="http://librehealth.io/">librehealth.io</a><br>
            <a href="https://forums.librehealth.io/">LibreHealth Community Forum</a>
        </div>

        <h3>Special Thanks</h3>
        <div class="paragraph">
            To all the contributers at open-emr.org for all the years of work they put in to their product which LibreHealth EHR is forked from.<br>
            To see all the contributers you can visit their acknowledgements page at open-emr.org.<br>
            Thanks Folks!!!
            <h3>
                LibreHealth is collaobrative community for free &amp; open source software projects in Health IT, and is a member project of Software Freedom Conservancy.
            </h3>
        </div>

        <h3>Certification</h3>
        <div class="paragraph">
            Up and coming
            <ul>
                <li>Managed and provided by librehealth.io  - <a href="http://librehealth.io">librehealth.io</a></li>
            </ul>
        </div>

        <h3>List of Contributors</h3>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Contributor</th>
                <th>Contact</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Bowen Medical</td>
                <td><a href="http://www.bowenmd.com">Bowen Medical</a><br>
                    2365 Springs Rd NE, Hickory, NC 28601<br>
                    Emily Killian<br>
                    Nikolai Vitsyn<br>
                    Samuel T. Bowen, MD<br>
                    <a href="mailto:drbowen@bowenmd.com">drbowen@bowenmd.com</a><br></td>
            </tr>

            <tr>
                <td>Kevin Yeh</td>
                <td>kevin.y@integralemr.com</td>
            </tr>

            <tr>
                <td>Lilly Systems &amp; Solutions</td>
                <td><a href="http://www.lillysystems.com/">www.lillysystems.com</a><br>
                    libreehr@lillysystems.com<br>
                    Including:<br>
                    Jim Lilly<br>
                    Debbie Lilly<br>
                    Jacob Harrison<br>
                    Terry Hill</td>
            </tr>

            <tr>
                <td>
                    Medical Information Integration, LLC</td>
                <td><a href="http://www.mi-squared.com/">www.mi-squared.com</a><br>
                    info@mi-squared.com<br>
                    Aron Racho<br>
                    Jeremy Wallace<br>
                    Ken Chapple<br>
                    Tony McCormick<br>
                    Dan Pflieger<br>
                    Harley Tuck<br>
                    Sara McCormick<br>
                    Various MI2 Contractors
                </td>
            </tr>

            <tr>
                <td>
                    SunCoast Connection Inc.</td>
                <td><a href="http://suncoastconnection.com/">SunCoastConnection.com</a><br>
                    art@suncoastconnection.com<br>
                    Art Eaton<br>
                    Bryan Lee<br>
                    Lana Woods<br>

                </td></tr><tr>
                <td>
                    2017 Google Summer of Code Students</td>
                <td><a href="https://forums.librehealth.io/groups/GSoC2017Students">GSOC Students</a><br>
                    Ujjwal Arora<br>
                    Nilesh Prasad<br>
                    Priyanshu Sinha</td>
            </tr>


            </tbody>
        </table>
        <h3>Healthcare Disclaimer</h3>
        <a name="healthcare_disclaimer"></a>
        <div class="paragraph">
            In the United States, or any other jurisdictions where they may apply, the following additional disclaimer of warranty and limitation of liability are hereby incorporated into the terms and conditions of GPL:
            <ol>
                <li>No warranties of any kind whatsoever are made as to the results that You will obtain from relying upon the covered code (or any information or content obtained by way of the covered code), including but not limited to compliance with privacy laws or regulations or clinical care industry standards and protocols. Use of the covered code is not a substitute for a health care provider's standard practice or professional judgment. Any decision with regard to the appropriateness of treatment, or the validity or reliability of information or content made available by the covered code, is the sole responsibility of the health care provider. Consequently, it is incumbent upon each health care provider to verify all medical history and treatment plans with each patient.</li>
                <li>Under no circumstances and under no legal theory, whether tort (including negligence), contract, or otherwise, shall any Contributor, or anyone who distributes Covered Software as permitted by the license, be liable to You for any indirect, special, incidental, consequential damages of any character including, without limitation, damages for loss of goodwill, work stoppage, computer failure or malfunction, or any and all other damages or losses, of any nature whatsoever (direct or otherwise) on account of or associated with the use or inability to use the covered content (including, without limitation, the use of information or content made available by the covered code, all documentation associated therewith, and the failure of the covered code to comply with privacy laws and regulations or clinical care industry standards and protocols), even if such party shall have been informed of the possibility of such damages.</li>
            </ol>
        </div>
    </div>

    @endsection

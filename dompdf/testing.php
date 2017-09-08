<?php 
// include autoloader
require_once 'autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml(' <h2 class="app_title">Employment Application<span class="download">
                <a href="http://localhost/winaumashipping/download.php?download_file=application.pdf">Download Here</a>
            </span></h2>


            <table style="width:450px;float:left;margin-top:35px;">
             <tr><td>
        
        <b>Position Applied :</b>
        <input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:260px" />
    </td>
    
        </tr>

        <tr>
            <td style="padding-top:40px;">
        <b>Date Applied &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <input name="Last_Name" type="text" class="app_form_textbox" maxlength="50" style="width:260px" />
        </td>
         
        </tr>

            </table>
            <div class="col-md-55 alignimage">
                        <div class="thumbnail" id="fileList">
                          <div class="view view-first">


                            <?php echo "<img  class=\"resize_img\" style=\"width: 100%; height:100%;display: block;\" src=\"images/user.png \" alt=\"image\" />"; ?>
                            <input type="hidden" name="himgpath" value="images/user.png">

                          </div>
                        </div>
                        <input type="file" id="fileElem" name="browseimg" class="dz-default dz-message" value="Update Image" size="30" onchange="handleFiles(this.files)">

                        </div>
            <h4 class="ask_title">How you come to know of this position open?</h4>
        <input type="checkbox" name="ask" value="newspaper" checked> Through Newspaper&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :</label>&nbsp;&nbsp;&nbsp;<input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:650px" /><br>
          <input type="checkbox" name="ask" value="employment" > Through Employment Agency&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :</label>&nbsp;&nbsp;&nbsp;<input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:650px" /><br>
          <input type="checkbox" name="ask" value="friend" > Friend Recommend&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :</label>&nbsp;&nbsp;&nbsp;&nbsp;<input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:650px" /><br>
          <input type="checkbox" name="ask" value="internet" > Others(Internet Job Search,etc)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :</label>&nbsp;&nbsp;&nbsp;&nbsp;<input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:650px" /><br>
         


<hr />

        <input id="skip_WhereToSend" name="skip_WhereToSend" type="hidden" value="your@email.com" />
        <input id="skip_SnapHostID" name="skip_SnapHostID" type="hidden" value="EWT89XDFH47U" />
        <input id="skip_WhereToReturn" name="skip_WhereToReturn" type="hidden" value="http://www.YourWebsiteAddress.com/ThankYouPage.htm" />
        <input id="skip_Subject" name="skip_Subject" type="hidden" value="Employment Application" />
        <input id="skip_ShowUsersIp" name="skip_ShowUsersIp" type="hidden" value="1" />
        <input id="skip_SendCopyToUser" name="skip_SendCopyToUser" type="hidden" value="1" />
        <h2 class="detail_title">(A)PERSONAL DETAILS</h2>
       <table cellpadding="5" cellspacing="0" style="border: 1px solid gray;">
        <tr>
        <td colspan="2">
        <label>Full Name (as in NRC;) 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:835px" />
        </td>
        
        </tr>
        <tr>
        <td>
        <b>NRC No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
         <td>
        <b>Passport No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
        </tr>
        <tr>
            <td colspan="2">
        <label>Present Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:835px" /><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="First_Name" type="text" class="app_form_textbox" maxlength="50" style="width:835px" />
        </td>
        </tr>
        <tr>
        <td>
        <b>Telephone No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
         <td>
        <b>Postal Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
        </tr>

        <tr>
        <td>
        <b>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
         <td>
        <b>Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <input type="checkbox" name="sex" value="male" > Male
         <input type="checkbox" name="sex" value="female" > Female
        </td>
        </tr>

        <tr>
        <td>
        <b>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
         <td>
        <b>Marital&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
         <input type="checkbox" name="marital" value="male" > Single&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="marital" value="female" > Divorced&nbsp;&nbsp;&nbsp;&nbsp;
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="checkbox" name="marital" value="male" > Married&nbsp;&nbsp;
         <input type="checkbox" name="marital" value="female" > Widow
        </td>
        </tr>

        <tr>
        <td>
        <b>Place of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
         <td>
        <b>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
        </tr>

        <tr>
        <td>
        <b>Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
         <td>
        <b>Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
        </tr>

        <tr>
        <td>
        <b>Race&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:340px" />
        </td>
        <td>
        <b>Blood Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
         <input type="checkbox" name="blood" value="a" > A&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="blood" value="o" > O&nbsp;&nbsp;&nbsp;&nbsp;
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;<input type="checkbox" name="blood" value="b" > B&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="blood" value="ab" > AB
        </td>
        </tr>
         <tr>
        <td>
        <b>Valid Driving License&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="license" value="yes" > YES&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="license" value="no" > NO&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
        <b>If yes,please specify what class:</b>
         <input name="Email_Address" type="text" class="app_form_textbox" maxlength="100" style="width:270px" />
        </td>
        </tr>
        </table>
        <hr />
        <h2 class="detail_title">(B)FAMILY BACKGROUND</h2>
        <table class="b_table" style="width:100%">
            <tr class="b_table">
                <th class="b_table b_table_th">Name</th>
                <th class="b_table b_table_th">Relationship</th>
                <th class="b_table b_table_th">Age</th>
                <th class="b_table b_table_th">Employer</th>
                <th class="b_table b_table_th">Occupation</th>
            </tr>
            <tr class="b_table">
                <td class="b_table">Father:<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">Mother:<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>           
            </tr>
            <tr class="b_table">
                <td class="b_table"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>  
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
        </table>
          <hr />
        <h2 class="detail_title">(C)EDUCATIONAL BACKGROUND<span style="font-size:large;padding-left:10px">(from elementary school)</span></h2>
        <table class="b_table" style="width:100%">
            <tr>

                
            </tr>
            <tr>
                <th  rowspan="2" class="b_table b_table_th">Name of Insitution</th>
                <th class="b_table b_table_th" colspan="2" >Date</th>
                <th class="b_table b_table_th" rowspan="2">Duration</th>                
                <th class="b_table b_table_th" rowspan="2">Standard/Certificate<h4> Attained</h4></th>
            </tr>
             <tr class="b_table">
              <td class="b_table"><h3 style="text-align:center;padding:0;margin:0">From</h3><h6 style="text-align:center;padding:0;margin:0">Month/Year</h6></td>
                <td class="b_table"><h3 style="text-align:center;padding:0;margin:0">To</h3><h6 style="text-align:center;padding:0;margin:0">Month/Year</h6></td>  
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="b_table_texbox"></input></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
                <td class="b_table"><input type="text" class="b_table_texbox"></td>
            </tr>
        </table>
        <hr/>
       <h2 class="detail_title">(D)LANGUAGES<span style="font-size:large;padding-left:10px">(Please indicate Slight/Fair/Fluent)</span></h2>
        <table class="b_table" style="width:100%">
            <tr class="b_table">
                <th class="b_table b_table_th">&nbsp;</th>
                <th class="b_table b_table_th">Speak</th>
                <th class="b_table b_table_th">Read</th>
                <th class="b_table b_table_th">Write</th>
                
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
               
            </tr>
              <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
               
            </tr>
              <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
               
            </tr>
              <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
                <td class="b_table"><input type="text" class="d_table_textbox"></td>
               
            </tr>
        </table>
        <hr/>
        <h2 class="detail_title">(E)KNOWLEDGE/SKILLS with</h2>
        <table class="b_table" style="width:100%">
        
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;COBOL
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;" >&nbsp;&nbsp;VB</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Java Script</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Intranet</td>
            </tr>
             <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Asembly
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;ASP</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;UML</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Network & Security Management</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Perl
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;.Net</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;MS SQL</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;LAN & WAN Technology</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Linux
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;C#</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Oracle 8.0</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Communication Protocol(SAM,TCP/IP,CAFIS,X25,etc)</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Unix
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Java</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Oracle 9i</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Hardware</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;CORBA
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Servlet</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;DB2</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Dreamweaver</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;C
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;JavaBeans</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;WebSphere</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Photoshop</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;C++
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;JSP</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Access</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Illustrator</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;VC
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;EJB</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;HTML</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;OA Tools(Excel,Word,Power Point)</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;VC++
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;JDBC</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;XML</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Adobe Page Maker</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;VB Script
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;J2SE</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;SGML</td>
                <td class="b_table" style="padding-left:10px;">
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;VBA
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;JDK</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" name="cobol" style="padding-left:10px;">&nbsp;&nbsp;Internet</td>
                <td class="b_table" style="padding-left:10px;">
            </tr>

        </table>

         <hr/>
        <h2 class="detail_title">(F)EMPLOYMENT HISTORY<span style="font-size:large;padding-left:10px">(If you have working experience)</span></h2>
        <table class="b_table" style="width:100%">
            <tr>
                
            </tr>
            <tr>
                <th  rowspan="2" class="b_table b_table_th">Name of Company<h4>or Employer</h4> </th>
                <th  rowspan="2" class="b_table b_table_th">Position Held</th>
                <th class="b_table b_table_th" colspan="2" >Date</th>
                <th class="b_table b_table_th" rowspan="2">Salary</th>                
                <th class="b_table b_table_th" rowspan="2">Reason for<h4> Leaving</h4></th>
            </tr>
             <tr class="b_table">

              <td class="b_table"><h3 style="text-align:center;padding:0;margin:0">From</h3><h6 style="text-align:center;padding:0;margin:0">Month/Year</h6></td>
                <td class="b_table"><h3 style="text-align:center;padding:0;margin:0">To</h3><h6 style="text-align:center;padding:0;margin:0">Month/Year</h6></td>  
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                 <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                 <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust" ></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                 <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                 <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                 <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                 <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr class="b_table">
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                 <td class="b_table"><input type="text" class="f_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            
        </table>
         <hr/>
        <h2 class="detail_title">(G)REFERENCES</h2>
        <h5>List at least 2 references below.Relatives should not be included.</h5>
        <table class="b_table" style="width:100%">
            <tr class="b_table">
                <th  class="b_table b_table_th">Name</th>
                <th   class="b_table b_table_th">Address</th>
                <th   class="b_table b_table_th">Tel No</th>
                <th  class="b_table b_table_th">Occupation</th>
                <th  class="b_table b_table_th">Year Known Since</th>
            </tr>
            <tr>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
            <tr>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></input></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
                <td class="b_table"><input type="text" class="d_table_textbox add_adjust"></td>
            </tr>
        </table>
        <hr/>
        <h2 class="detail_title">(H)GENERAL</h2>
        <ol>
            <li>
                Have you ever suffered from any major illness? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
        <input type="checkbox" name="illness" value="yes" > Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="illness" value="no" > No<br>
                If yes, please specify:<input type="text" class="d_table_textbox" style="width:600px"></input>
            </li>
            <li>
                Have you ever been convicted of any criminal offence? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
        <input type="checkbox" name="crime" value="yes" > Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="crime" value="no" > No<br>
                If yes, please specify:<input type="text" class="d_table_textbox" style="width:600px"></input>
            </li>
        </ol>
       Remuneration Expected&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" class="d_table_textbox" style="width:300px"></input>
        
        <br><br>Earliest Available Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" class="d_table_textbox" style="width:300px"></input>
        <br /><br />
        <br><br>
        I hereby declare that the information given by me in this form is correct and true to the best of my knowledge.
        I understand and accept that if at any time after engagement it is found that a false declaration has been made 
        in this form, the employer has the absolute right to terminate my employment forthwith.
        <br>
        <br>
        <br>
        Signature of Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" class="d_table_textbox" style="width:300px"></input>
        <br><br>
        Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" class="d_table_textbox" style="width:300px"></input>
        <br>
        <br>
        <br>
        <input name="skip_Submit" type="submit" style="margin-left:500px" value="Send Application" />
        </div>');



// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>
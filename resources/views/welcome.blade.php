<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>POS NETWORK SOLUTION SYSTEM</title>
  <link rel="stylesheet" type="text/css" href="css.css" />
  <link rel="shortcut icon" href="image/pos.ico">

  <style>
    body {
      background-image: url(images/fujihead1.jpg);
      background-repeat: repeat-x;
      background-position: center top;
      background-color: #FFFFFF;
    }

    a:link, a:visited {
      color: #00F;
    }

    .style3 {
      color: #005AA4;
    }

    .style4 {
      color: #005AA4;
      font-weight: bold;
    }

    .style5 {
      color: #027B69;
    }

    .style6 {
      color: #C93636;
      font-weight: bold;
    }

    select, input[type="text"], input[type="password"] {
      width: 250px;
      height: 30px;
      font-size: 15px;
      font-family: Arial;
      background-color: #FFFFFF;
      border: solid 1px #000;
    }

    input[type="submit"], input[type="reset"] {
      width: 180px;
      height: 50px;
      font-size: 25px;
      font-family: Arial;
    }
  </style>
</head>

<body topmargin="0" leftmargin="0">

  <div style="text-align:right; padding: 10px 20px;">
    <a href="#">TH</a> / <a href="#">EN</a>
  </div>

  <div style="padding-left: 20px;">
    <a href="#"><img src="../img/mainlogo.png" width="254" height="37" border="0" /></a>
  </div>

  <form action="#" method="POST">
    <table width="693" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td align="center" height="180">
          <img src="images/posweb.jpg" alt="" width="550" height="80" />
        </td>
      </tr>
    </table>

    <table width="597" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td width="241">
          <img src="pic/mailbox-3.png" width="300" height="280" />
        </td>

        <td width="356" valign="top">
          <table border="0" align="center" cellpadding="2" cellspacing="4">
            <tr>
              <td class="style3"><span class="style6"><font size="5" face="Arial">สาขา</font></span></td>
              <td class="style3">
                <select>
                  <option value="" selected>เลือกสาขา</option>
                  <option value="001">001</option>
                  <option value="002">002</option>
                  <!-- ตัวอย่าง: เพิ่มได้ตามต้องการ -->
                </select>
              </td>
            </tr>
            <tr>
              <td class="style3"><span class="style6"><font size="5" face="Arial">USER</font></span></td>
              <td class="style3"><input type="text" name="user" /></td>
            </tr>
            <tr>
              <td class="style3"><span class="style6"><font size="5" face="Arial">PASSWORD</font></span></td>
              <td class="style3"><input type="password" name="tpass" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center" class="style3">
                <p>
                  <input type="submit" value="Login" />
                  &nbsp;&nbsp;&nbsp;
                  <input type="reset" value="Cancel" />
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

    <p align="right" class="style5" style="padding-right: 30px;">Version 2.0</p>
  </form>

</body>
</html>

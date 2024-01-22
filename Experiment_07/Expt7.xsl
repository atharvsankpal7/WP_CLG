<!-- university.xslt -->

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <!-- Template for the root element -->
  <xsl:template match="University">
    <html>
      <head>
        <title>University Details</title>
      </head>
      <body>
        <h1>University Details</h1>
        <xsl:apply-templates select="Employee" />
        <xsl:apply-templates select="Student" />
      </body>
    </html>
  </xsl:template>

  <!-- Template for Employee elements -->
  <xsl:template match="Employee">
    <div>
      <h2>Employee Details</h2>
      <p>ID: <xsl:value-of select="ID" /></p>
      <p>First Name: <xsl:value-of select="FirstName" /></p>
      <p>Last Name: <xsl:value-of select="LastName" /></p>
      <p>Department: <xsl:value-of select="Department" /></p>
    </div>
  </xsl:template>

  <!-- Template for Student elements -->
  <xsl:template match="Student">
    <div>
      <h2>Student Details</h2>
      <p>Roll Number: <xsl:value-of select="RollNumber" /></p>
      <p>Student Name: <xsl:value-of select="StudentName" /></p>
      <p>Major: <xsl:value-of select="Major" /></p>
    </div>
  </xsl:template>

</xsl:stylesheet>

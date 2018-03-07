<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>workshop</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>name</th>
      <th>fee</th>
      <th>Description</th>
      <th>seats</th>
      <th>schedule</th>
      <th>Contact</th>
    </tr>
    <xsl:for-each select="workshop_information/info">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="fee"/></td>
      <td><xsl:value-of select="description"/></td>
      <td><xsl:value-of select="seats"/></td>
      <td><xsl:value-of select="schedule"/></td>
      <td><xsl:value-of select="contact"/></td>
    </tr>
    </xsl:for-each>
  </table>
  
   
   
</body>
</html>
</xsl:template>
</xsl:stylesheet>
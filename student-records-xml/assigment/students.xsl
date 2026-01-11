<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <!-- Main template to create the HTML structure -->
    <xsl:template match="/">
        <html>
            <head>
                <title>Student Records</title>
                <style>
                    body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: #f0f4f8; margin: 0; padding: 20px; }
                    .container { max-width: 900px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
                    h1 { color: #1e293b; text-align: center; margin-bottom: 20px; }
                    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                    th, td { text-align: left; padding: 12px; border-bottom: 1px solid #e2e8f0; }
                    th { background-color: #4a5568; color: #ffffff; font-weight: 600; text-transform: uppercase; }
                    tr:nth-child(even) { background-color: #f7fafc; }
                    tr:hover { background-color: #edf2f7; }
                    ul { list-style-type: none; margin: 0; padding: 0; }
                    li { margin-bottom: 5px; }
                    .course-title { font-weight: bold; }
                    .student-id { font-style: italic; color: #64748b; }
                </style>
            </head>
            <body>
                <div class="container">
                    <h1>Student Records</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Courses &amp; Grades</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Apply templates for each student -->
                            <xsl:apply-templates select="student_records/student"/>
                        </tbody>
                    </table>
                </div>
            </body>
        </html>
    </xsl:template>

    <!-- Template for each student row -->
    <xsl:template match="student">
        <tr>
            <td>
                <span class="student-id">
                    <xsl:value-of select="@id"/>
                </span>
            </td>
            <td>
                <xsl:value-of select="name"/>
            </td>
            <td>
                <xsl:value-of select="email"/>
            </td>
            <td>
                <!-- List the courses for the student -->
                <ul>
                    <xsl:for-each select="courses/course">
                        <li>
                            <span class="course-title">
                                <xsl:value-of select="title"/>
                            </span>: <xsl:value-of select="grade"/>
                        </li>
                    </xsl:for-each>
                </ul>
            </td>
        </tr>
    </xsl:template>
</xsl:stylesheet>

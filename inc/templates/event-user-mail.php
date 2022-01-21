<html>
    <head>
        <style>
            body {
                font-family: 'Arial', sans-serif;
            }
        </style>
    </head>
    <body>
        
        <h1>Ihre Anmeldung für das Event <?php echo get_the_title($id);?></h1>
        <p>Hallo <?php echo $request['name'];?>,</p>
        <p>Ihre Anmeldung für die Veranstaltung ist erfolgreich eingegangen.</p>

        <h3>Ihre Daten</h3>
        <table>
            <tr>
                <td>Name:</td><td><?php echo $request['name'];?></td>
            </tr>
             <tr>
                <td>E-Mail:</td><td><?php echo $request['email'];?></td>
            </tr>
             <tr>
                <td>Unternehmen/Bildungseinrichtung:</td><td><?php echo $request['company'];?></td>
            </tr>
            <tr>
                <td>Datum/Uhrzeit der Anmeldung:</td><td><?php echo date('d.m.Y H:i');?></td>
            </tr>
            
        </table>

        <h3>Informationen zur Veranstaltung</h3>
        <table>
             <tr>
                <td>Eventtitel:</td><td><?php echo get_the_title($id);?></td>
            </tr>
             <tr>
                <td>Beschreibung:</td><td><?php the_field('kurzbeschreibung',$id);?></td>
            </tr>
            <tr>
                <td>Startdatum:</td><td><?php echo NEFF_EventModel::format_date(get_field('event_start',$id));?></td>
            </tr>
             <tr>
                <td>Enddatum:</td><td><?php echo NEFF_EventModel::format_date(get_field('event_ende',$id));?></td>
            </tr>
             <tr>
                <td>Uhrzeit:</td><td><?php the_field('event_uhrzeit',$id);?></td>
            </tr>
            <tr>
                <td>Ort:</td><td><?php the_field('veranstaltungsort',$id);?></td>
            </tr>
             <tr>
                <td>Referenten:</td><td><?php the_field('referenten',$id);?></td>
            </tr>
            
        </table>
          
        <table>
            <tr><td><?php the_field('abbinder', 'option');?></td></tr>
        </table>
    </body>
</html>

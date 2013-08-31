<?php

return array(

	'extend' => 'Erweitern',

	'fields' => 'Benutzerdefinierte Felder',
	'fields_desc' => 'Zusätzliche Felder hinzufügen',

	'variables' => 'Seiten-Variablen',
	'variables_desc' => 'Zusätzliche Metadaten hinzufügen',

	'create_field' => 'Neues Feld erstellen',
	'editing_custom_field' => 'Bearbeite Feld &ldquo;%s&rdquo;',
	'nofields_desc' => 'Noch keine Felder',

	'create_variable' => 'Neue Variable erstellen',
	'editing_variable' => 'Bearbeite Variable &ldquo;%s&rdquo;',
	'novars_desc' => 'noch keine Varibalen vorhanden',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Der Typ der Inhalte, die zu diesem Feld hinzugefügt werden sollen.',

	'field' => 'Feld',
	'field_explain' => 'HTML input Typ',

	'key' => 'Schlüsselwort',
	'key_explain' => 'Eindeutiges Schlüsselwort für das Feld',
	'key_missing' => 'Füge ein Schlüsselwort hinzu.',
	'key_exists' => 'Schlüsselwort wird bereits benutzt.',

	'label' => 'Beschriftung',
	'label_explain' => 'Allgemein verständlicher Name für das Feld',
	'label_missing' => 'Gib eine Beschriftung an.',

	'attribute_type' => 'Dateityp',
	'attribute_type_explain' => 'Durch Kommas getrennte Liste von akzeptierten Dateitypen. Leer lassen, um alle zu akzeptieren.',

	// images
	'attributes_size_width' => 'Maximalbreite',
	'attributes_size_width_explain' => 'Bilder werden verkleinert, wenn sie die Maximalgröße überschreiten.',

	'attributes_size_height' => 'Maximalhöhe',
	'attributes_size_height_explain' => 'Bilder werden verkleinert, wenn sie die Maximalgröße überschreiten.',

	// custom vars
	'name' => 'Name',
	'name_explain' => 'Eindeutig Name',
	'name_missing' => 'Gib einen eindeutigen Namen an.',
	'name_exists' => 'Name existiert bereits',

	'value' => 'Wert',
	'value_explain' => 'Daten, die Du speichern willst. (bis zu 64kb)',
	'value_code_snipet' => 'Code zum Einfügen in dein Template:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Deine Variable wurde erstellt',
	'variable_updated' => 'Deine Variable wurde aktualisiert',
	'variable_deleted' => 'Deine Variable wurde gelöscht',

	'field_created' => 'Dein Feld wurde erstellt',
	'field_updated' => 'Dein Feld wurde aktualisiert',
	'field_deleted' => 'Dein Feld wurde gelöscht',

);
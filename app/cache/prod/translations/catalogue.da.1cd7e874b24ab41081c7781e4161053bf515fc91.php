<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'validators' => 
  array (
    'This value should be false.' => 'Værdien skal være falsk.',
    'This value should be true.' => 'Værdien skal være sand.',
    'This value should be of type {{ type }}.' => 'Værdien skal være af typen {{ type }}.',
    'This value should be blank.' => 'Værdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Værdien skal være en af de givne muligheder.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du skal vælge mindst {{ limit }} muligheder.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan højest vælge {{ limit }} muligheder.',
    'One or more of the given values is invalid.' => 'En eller flere af de oplyste værdier er ugyldige.',
    'This field was not expected.' => 'Feltet blev ikke forventet.',
    'This field is missing.' => 'Dette felt er mangler.',
    'This value is not a valid date.' => 'Værdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Værdien er ikke en gyldig dato og tid.',
    'This value is not a valid email address.' => 'Værdien er ikke en gyldig e-mail adresse.',
    'The file could not be found.' => 'Filen kunne ikke findes.',
    'The file is not readable.' => 'Filen kan ikke læses.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilladte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen af filen er ugyldig ({{ type }}). Tilladte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Værdien skal være {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Værdien er for lang. Den skal have {{ limit }} bogstaver eller mindre.',
    'This value should be {{ limit }} or more.' => 'Værdien skal være {{ limit }} eller mere.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Værdien er for kort. Den skal have {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Værdien må ikke være blank.',
    'This value should not be null.' => 'Værdien må ikke være tom (null).',
    'This value should be null.' => 'Værdien skal være tom (null).',
    'This value is not valid.' => 'Værdien er ikke gyldig.',
    'This value is not a valid time.' => 'Værdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Værdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'De to værdier skal være ens.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelse er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke blive uploadet.',
    'This value should be a valid number.' => 'Værdien skal være et gyldigt tal.',
    'This file is not a valid image.' => 'Filen er ikke gyldigt billede.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Værdien er ikke et gyldigt sprog.',
    'This value is not a valid locale.' => 'Værdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Værdien er ikke et gyldigt land.',
    'This value is already used.' => 'Værdien er allerede i brug.',
    'The size of the image could not be detected.' => 'Størrelsen på billedet kunne ikke detekteres.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Billedbredden er for stor ({{ width }}px). Tilladt maksimumsbredde er {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Billedebredden er for lille ({{ width }}px). Forventet minimumshøjde er {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Billedhøjden er for stor ({{ height }}px). Tilladt maksimumshøjde er {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billedhøjden er for lille ({{ height }}px). Forventet minimumshøjde er {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Værdien skal være brugerens nuværende password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Værdien skal have præcis {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen var kun delvis uploadet.',
    'No file was uploaded.' => 'Ingen fil blev uploadet.',
    'No temporary folder was configured in php.ini.' => 'Ingen midlertidig mappe er konfigureret i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP udvidelse forårsagede fejl i upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samling skal indeholde {{ limit }} element eller flere.|Denne samling skal indeholde {{ limit }} elementer eller flere.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samling skal indeholde {{ limit }} element eller mindre.|Denne samling skal indeholde {{ limit }} elementer eller mindre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samling skal indeholde præcis {{ limit }} element.|Denne samling skal indeholde præcis {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Ikke-understøttet korttype eller ugyldigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det er ikke en gyldig International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Værdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Værdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Værdien er hverken en gyldig ISBN-10 eller en gyldig ISBN-13.',
    'This value is not a valid ISSN.' => 'Værdien er ikke en gyldig ISSN.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke indeholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den oploadede fil var for stor. Opload venligst en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF nøglen er ugyldig.',
    'fos_user.username.already_used' => 'Brugernavnet er optaget',
    'fos_user.username.blank' => 'Indtast venligst et brugernavn',
    'fos_user.username.short' => 'Brugernavnet er for kort',
    'fos_user.username.long' => 'Brugernavnet er for langt',
    'fos_user.email.already_used' => 'E-mail adressen er allerede brugt',
    'fos_user.email.blank' => 'Indtast venligst en e-mail adresse',
    'fos_user.email.short' => 'E-mail adressen er for kort',
    'fos_user.email.long' => 'E-mail adressen er for lang',
    'fos_user.email.invalid' => 'E-mail adressen er ikke gyldig',
    'fos_user.password.blank' => 'Indtast venligst et kodeord',
    'fos_user.password.short' => 'Kodeordet er for kort',
    'fos_user.new_password.blank' => 'Indtast venligst et nyt kodeord',
    'fos_user.new_password.short' => 'Det nye kodeord er for kort',
    'fos_user.current_password.invalid' => 'Det indtastede kodeord er forkert',
    'fos_user.group.blank' => 'Indtast venligst et navn',
    'fos_user.group.short' => 'Navnet er for kort',
    'fos_user.group.long' => 'Navnet er for langt',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kan findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodning kan ikke behandles på grund af et systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen tilladselese at anvende kilden.',
    'Invalid CSRF token.' => 'Ugyldigt CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce er udløbet.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder er fundet til understøttelsen af godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session tilgængelig, sessionen er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kan findes.',
    'Username could not be found.' => 'Brugernavn kan ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Opdater gruppe',
    'group.show.name' => 'Gruppenavn',
    'group.new.submit' => 'Opret gruppe',
    'group.flash.updated' => 'Gruppen er blevet opdateret',
    'group.flash.created' => 'Gruppen er blevet oprettet',
    'group.flash.deleted' => 'Gruppen er blevet slettet',
    'security.login.username' => 'Brugernavn',
    'security.login.password' => 'Kodeord',
    'security.login.remember_me' => 'Husk mig',
    'security.login.submit' => 'Log ind',
    'profile.show.username' => 'Brugernavn',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Opdater',
    'profile.flash.updated' => 'Profilen er blevet opdateret',
    'change_password.submit' => 'Skift kodeord',
    'change_password.flash.success' => 'Kodeordet er blevet opdateret',
    'registration.check_email' => 'En email er blevet sendt til %email%. Den indeholder et aktiveringslink du skal bruge for at aktivere din konto.',
    'registration.confirmed' => 'Tillykke %username%, din konto er nu aktiveret',
    'registration.submit' => 'Registrer',
    'registration.flash.user_created' => 'Bruger er blevet oprettet',
    'registration.email.subject' => 'Velkommen %username%!',
    'registration.email.message' => 'Hej %username%!

For at færdiggøre valideringen af din konto, besøg venligst %confirmationUrl%

Venlig hilsen,
Holdet bag siden.
',
    'resetting.password_already_requested' => 'Denne brugers kodeord er allerede blevet nulstillet inden for de sidste 24 timer.',
    'resetting.check_email' => 'En email er blevet sendt til %email%. Den indeholder et link til at nulstille dit kodeord.',
    'resetting.request.invalid_username' => 'Brugeren "%username" findes ikke',
    'resetting.request.username' => 'Brugernavn',
    'resetting.request.submit' => 'Nulstil kodeord',
    'resetting.reset.submit' => 'Skift kodeord',
    'resetting.flash.success' => 'Kodeordet er blevet nulstillet',
    'resetting.email.subject' => 'Velkommen %username%!',
    'resetting.email.message' => 'Hej %username%!

For at nulstille dit kodeord, besøg venligst %confirmationUrl%

Venlig hilsen,
Holdet bag siden.
',
    'layout.logout' => 'Log ud',
    'layout.login' => 'Log ind',
    'layout.register' => 'Registrer',
    'layout.logged_in_as' => 'Logget ind som %username%',
    'form.group_name' => 'Gruppe navn',
    'form.username' => 'Brugernavn',
    'form.email' => 'Email',
    'form.current_password' => 'Nuværende kodeord',
    'form.password' => 'Kodeord',
    'form.password_confirmation' => 'Gentag kodeord',
    'form.new_password' => 'Nyt kodeord',
    'form.new_password_confirmation' => 'Gentag kodeord',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    'Bonjour' => 'Hello',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;

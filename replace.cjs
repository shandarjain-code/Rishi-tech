const fs = require('fs');
let content = fs.readFileSync('resources/views/layouts/app.blade.php', 'utf8');
content = content.replace(/#FF001A/g, '#2563EB');
content = content.replace(/255,\s*0,\s*26/g, '37, 99, 235');
content = content.replace(/font-size: 16px;/g, 'font-size: 16px;\n            letter-spacing: 0.015em;');
fs.writeFileSync('resources/views/layouts/app.blade.php', content);

# 🛠️ Tips para Debuggear Cambios CSS/HTML

## 1. Herramientas de Desarrollador (F12)
- **F12** → Abrir DevTools
- **Network Tab** → Marcar "Disable cache" mientras DevTools está abierto
- **Elements Tab** → Inspeccionar elemento y ver CSS aplicado
- **Console Tab** → Ver errores de carga de archivos

## 2. Verificar carga de archivos
- Network Tab → Recargar página → Ver si index.css se carga con status 200
- Si aparece 304 (Not Modified) es cache del navegador
- Si aparece 404 (Not Found) hay problema de ruta

## 3. Métodos de cache busting
```html
<!-- Agregar versión/timestamp al CSS -->
<link rel="stylesheet" href="styles/index.css?v=1.1">
<link rel="stylesheet" href="styles/index.css?t=20250725">
```

## 4. Modo incógnito/privado
- Ctrl + Shift + N (Chrome)
- Ctrl + Shift + P (Firefox)
- El modo incógnito no guarda cache

## 5. Verificaciones rápidas en DevTools
- Elements → Computed → Ver estilos finales aplicados
- Elements → Styles → Ver qué reglas CSS están activas
- Console → Escribir: `location.reload(true)` para recarga forzada

## 6. Validar servidor local
- Verificar que XAMPP Apache esté corriendo
- Acceder a http://localhost/netflix/ 
- No usar file:// sino http://

## 7. Cambios temporales para test
- Agregar `background: red !important;` para ver cambios inmediatos
- Cambiar colores obviamente diferentes para confirmar
- Usar border: 5px solid red; como test

## 8. Configuración del navegador
- Chrome: Settings → Privacy → Clear browsing data → Cached images and files
- Firefox: Settings → Privacy → Clear Data → Cached Web Content

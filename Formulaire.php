<!DOCTYPE html>
 <html>
    <head>
        <title>Cours Complet Bootstrap 4</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     </head>
     <body>
         <div class="container">
             <h1>Formulaires</h1>
             <form>
               <fieldset>
                 <legend>Exemple de formulaire Bootstrap</legend>
                 
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" id="nom" placeholder="Pierre GIRAUD">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control" id="email" placeholder="pierre.giraud@edhec.com">
                 </div>
                 
                 <div class="form-group">
                   <label for="selection">Une liste select</label>
                   <select id="selection" class="form-control">
                     <option value="">Liste de choix...</option>
                     <optgroup label="Groupe d'options 1">
                       <option value="">Option 1</option>
                       <option value="">Option 2</option>
                       <option value="">Option 3</option>
                     </optgroup>
                     <optgroup label="Groupe d'options 2">
                       <option value="">Option 4</option>
                       <option value="">Option 5</option>
                     </optgroup>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="bio">Biographie</label>
                   <textarea class="form-control" id="bio" rows="3"></textarea>
                 </div>
               </fieldset>
             </form>
         </div>
    </body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
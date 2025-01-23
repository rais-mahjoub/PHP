SELECT salles.Nom AS nom_salle, etage.Nom AS nom_etage 
FROM salles JOIN etage ON salles.id_etage = etage.ID;

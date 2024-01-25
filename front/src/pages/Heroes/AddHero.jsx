// Import des composants Material-UI
import React, { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

import {
  Container,
  Typography,
  TextField,
  Select,
  MenuItem,
  InputLabel,
  FormControl,
  Button,
  Checkbox,
  Box,
} from "@mui/material";

const AddForm = () => {
  const navigate = useNavigate();

  const [heroData, setHeroData] = useState({
    pseudo: "",
    first_name: "",
    last_name: "",
    first_appearance: "",
    history: "",
    image_url: null, // Utilisez null comme valeur initiale
    identite_connue: false,
    user_id: "",
    creator_id: "",
    race_id: "",
    category_id: "",
    alignment_id: "",
  });

  // Gestionnaire d'événement pour les champs de saisie
  const handleInputChange = (event) => {
    const { name, value, type, checked } = event.target;
    const newValue = type === "checkbox" ? checked : value;
    setHeroData((prevData) => ({
      ...prevData,
      [name]: newValue,
    }));
  };

  // Gestionnaire d'événement pour le champ de fichier
  const handleFileChange = (event) => {
    const file = event.target.files[0];

    // Mise à jour de l'objet d'état
    setHeroData((prevData) => ({
      ...prevData,
      image_url: file,
    }));
  };

  // Gestionnaire d'événement pour le formulaire
  const handleSubmit = async (event) => {
    event.preventDefault();

    // Utilisez FormData pour envoyer des fichiers
    const formData = new FormData();
    for (const key in heroData) {
      formData.append(key, heroData[key]);
    }

    try {
      // Envoyer les données à votre backend via Axios ou autre méthode
      const response = await axios.post(
        "http://127.0.0.1:8000/api/heroes",
        formData
      );

      // Si la création est réussie, naviguer vers la page appropriée
      if (response.status === 200) {
        navigate("/heroes");
      }
    } catch (error) {
      console.error("Erreur lors de l'envoi des données", error);
    }
  };

  return (
    <Container maxWidth="md" sx={{ marginTop: 4 }}>
      <Typography variant="h1" sx={{ marginLeft: 5, marginTop: 4 }}>
        Création d'un héros
      </Typography>

      <form
        action="{{ route('heroes.store') }}"
        method="POST"
        encType="multipart/form-data"
        onSubmit={handleSubmit}
      >
        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="pseudo">Pseudo</InputLabel>
            <TextField
              id="pseudo"
              name="pseudo"
              required
              variant="outlined"
              sx={{ backgroundColor: "#472b3b", color: "#ffffff" }}
              onChange={handleInputChange}
            />
          </FormControl>
        </Box>

        {/* Champ pour le prénom */}
        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="first_name">Prénom</InputLabel>
            <TextField
              id="first_name"
              name="first_name"
              variant="outlined"
              sx={{ backgroundColor: "#472b3b", color: "#ffffff" }}
              onChange={handleInputChange}
            />
          </FormControl>
        </Box>

        {/* Champ pour le nom */}
        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="last_name">Nom</InputLabel>
            <TextField
              id="last_name"
              name="last_name"
              variant="outlined"
              sx={{ backgroundColor: "#472b3b", color: "#ffffff" }}
              onChange={handleInputChange}
            />
          </FormControl>
        </Box>

        {/* Champ pour la première apparition */}
        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="first_appearance"></InputLabel>
            <TextField
              id="first_appearance"
              name="first_appearance"
              type="date"
              variant="outlined"
              sx={{ backgroundColor: "#472b3b", color: "#ffffff" }}
              onChange={handleInputChange}
            />
          </FormControl>
        </Box>

        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="category_id">Catégorie</InputLabel>
            {/* <Select
              id="category_id"
              name="category_id"
              variant="outlined"
              sx={{ backgroundColor: "#472b3b", color: "#ffffff" }}
            >
              {categories.map((category) => (
                <MenuItem key={category.id} value={category.id}>
                  {category.name}
                </MenuItem>
              ))}
            </Select> */}
          </FormControl>
        </Box>

        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="alignment_id">Alignement</InputLabel>
            {/* <Select
              id="alignment_id"
              name="alignment_id"
              variant="outlined"
              sx={{ backgroundColor: "#472b3b", color: "#ffffff" }}
            >
              {alignments.map((alignment) => (
                <MenuItem key={alignment.id} value={alignment.id}>
                  {alignment.name}
                </MenuItem>
              ))}
            </Select> */}
          </FormControl>
        </Box>

        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="race_id">Race</InputLabel>
            {/* <Select
              id="race_id"
              name="race_id"
              variant="outlined"
              sx={{ backgroundColor: "#472b3b", color: "#ffffff" }}
            >
              {races.map((race) => (
                <MenuItem key={race.id} value={race.id}>
                  {race.name}
                </MenuItem>
              ))}
            </Select> */}
          </FormControl>
        </Box>

        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <InputLabel htmlFor="image_url">Image du héros</InputLabel>
            <input
              type="file"
              className="form-control"
              name="image_url"
              id="image_url"
              onChange={handleFileChange}
            />
          </FormControl>
        </Box>

        <Box sx={{ mb: 3 }}>
          <FormControl>
            <Checkbox
              id="identite_connue"
              name="identite_connue"
              defaultChecked
              onChange={handleInputChange}
            />
            <label htmlFor="identite_connue">Identité connue</label>
          </FormControl>
        </Box>

        <Box sx={{ mb: 3, mx: "auto", width: "50%" }}>
          <FormControl fullWidth>
            <Button variant="contained" color="primary" type="submit">
              Enregistrer
            </Button>
          </FormControl>
        </Box>
      </form>
    </Container>
  );
};

export default AddForm;

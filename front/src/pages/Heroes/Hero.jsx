import React, { useEffect, useState } from "react";
import axios from "axios";
import { useParams } from "react-router-dom";
import CardHero from "../../components/CardHero";

const Hero = () => {
  const params = useParams();
  const [pokemon, setPokemon] = useState([]);
  const [isBusy, setIsBusy] = useState(true);

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = () => {
    axios
      .get(`https://pokeapi.co/api/v2/pokemon/${params.id}`)
      .then((result) => {
        setPokemon(result.data);
      })
      .catch((e) => console.log(e))
      .finally(setIsBusy(false));
  };

  return (
    <div>
      <CardHero />
    </div>
  );
};
export default Hero;

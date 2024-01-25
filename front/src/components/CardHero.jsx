import React from "react";
import Card from "@mui/material/Card";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
import Typography from "@mui/material/Typography";
import { CardActionArea } from "@mui/material";
import { Link } from "react-router-dom";

const CardHero = ({ hero, skills, index }) => {
  return (
    <div className="center-container">
      <div className="cardPokemon ">
        <Card>
          <div className="card-header">
            <Typography variant="h5">
              {hero.first_name
                ? `${hero.first_name} ${hero.last_name}`
                : "????"}
            </Typography>
          </div>

          <div className="card-body-magic">
            <div className="img-hero-index-card">
              {hero.image_url && (
                <CardMedia
                  component="img"
                  height="140"
                  image={`/storage/uploads/${hero.image_url}`}
                  alt=""
                />
              )}
            </div>
            <div className="card-section mt-2 mb-2">{hero.category.name}</div>
            <div>
              <Typography variant="h6" className="mt-2 mb-2">
                {hero.race.name}
              </Typography>
              <div className="mb-3 ms-4">
                {skills.isEmpty() ? (
                  <Typography>Aucune compétence.</Typography>
                ) : (
                  skills.map((skill) => (
                    <div key={skill.id} className="d-flex align-items-center">
                      <i
                        className="material-icons"
                        style={{ fontSize: "1.1em", verticalAlign: "middle" }}
                      >
                        whatshot
                      </i>
                      <Typography
                        variant="subtitle1"
                        className="ms-3 mb-0 text-uppercase"
                        style={{ fontWeight: "bold" }}
                      >
                        {skill.name}
                      </Typography>
                    </div>
                  ))
                )}
              </div>

              <Typography className="mt-2">
                Créé par :{" "}
                {`${hero.creator.last_name} ${hero.creator.first_name}`}
              </Typography>
              <Typography></Typography>
              <Typography className="history mt-2">{hero.history}</Typography>
            </div>
          </div>
        </Card>
      </div>
    </div>
  );
};
export default CardHero;

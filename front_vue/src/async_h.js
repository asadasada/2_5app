import axios from "axios";

//check whether arr rook domain the same or not
  let Api = axios.create({
      baseURL: "http://localhost:8000/api"
  });
  Api.defaults.withCredentials=true;
   export default Api;

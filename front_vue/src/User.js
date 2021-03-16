import async_h from "./async_h";
import Csrf from "./Csrf";

export default {

 async register(form){
       await Csrf.get_cookie();
      return async_h.post("/register",form);
  },
  async login(form){
       await Csrf.get_cookie();
      return async_h.post("/login",form);
  },
    async logout(){
       await Csrf.get_cookie();
      return async_h.post("/logout");
  },
  async edit(form){
     await Csrf.get_cookie();
     return async_h.post("/edit",form);
 },
  get_prf() {
    // return axios.get("http://localhost:8000/api/user")
  return async_h.get("/user");
  },
    get_memo() {
    // return axios.get("http://localhost:8000/api/memo")
  return async_h.get("/edit");
  }
}

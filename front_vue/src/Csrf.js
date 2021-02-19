import async_h from "./async_h";

export default {
  get_cookie() {

    return async_h.get("/csrf-cookie");
  }
};


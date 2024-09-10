import axios, { CanceledError } from "axios";

export default axios.create({
    baseURL: "https://dashboard.xyberixsolutions.com/api/v1",
});

export { CanceledError };

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package co.edu.unimunuto;

import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.PathParam;
import javax.ws.rs.Consumes;
import javax.ws.rs.Produces;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import org.jboss.logging.Param;

/**
 * REST Web Service
 *
 * @author SOLREDES-ANDREA
 */
@Path("/Iva/")
@Produces("application/json")
public class IvaResource {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of IvaResource
     */
    public IvaResource() {
    }

    /**
     * Retrieves representation of an instance of co.edu.unimunuto.IvaResource
     * @return an instance of java.lang.Double
     */
    @GET
    @Path("/calcular/{valor}")
    @Produces("application/json")
    public String getJson(@PathParam("valor") double v) {
        double resultado=0;
        double total=0;
        resultado=v*0.19;
        total=v+resultado;
        //throw new UnsupportedOperationException();
        return "{iva:"+total+"}";
    }

    /**
     * PUT method for updating or creating an instance of IvaResource
     * @param content representation for the resource
     * @return an HTTP response with content of the updated or created resource.
     */
    @PUT
    @Consumes("application/json")
    public void putJson(Double content) {
    }
}

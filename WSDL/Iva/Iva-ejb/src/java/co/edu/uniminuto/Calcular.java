/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package co.edu.uniminuto;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.ejb.Stateless;

/**
 *
 * @author Familia Sanajeda
 */
@WebService(serviceName = "Calcular")
@Stateless()
public class Calcular {


    /**
     * Web service operation
     * @param valor
     * @return 
     */
    @WebMethod(operationName = "calcular")
    public double calcular(@WebParam(name = "valor") double valor) {
        double r=valor*0.19;
        double total=r+valor;
        return total;
    }
}
